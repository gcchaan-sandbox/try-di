import sqlite3

from injector import Module, provider, Injector, inject, singleton


class RequestHandler:
    @inject
    def __init__(self, db: sqlite3.Connection):
        self._db = db

    def get(self):
        cursor = self._db.cursor()
        cursor.execute('SELECT key, value FROM data ORDER by key')
        return cursor.fetchall()
    def close(self):
        self._db.close()


class Configuration:
    def __init__(self, connection_string):
        self.connection_string = connection_string


class DatabaseModule(Module):
    @singleton
    @provider
    def provide_sqlite_connection(self, configuration: Configuration) -> sqlite3.Connection:
        conn = sqlite3.connect(configuration.connection_string)
        cursor = conn.cursor()
        cursor.execute('CREATE TABLE IF NOT EXISTS data (key PRIMARY KEY, value)')
        cursor.execute('INSERT OR REPLACE INTO data VALUES ("hello", "world")')
        return conn


def configure_for_testing(binder):
    configuration = Configuration(':memory:')
    binder.bind(Configuration, to=configuration, scope=singleton)

injector = Injector([configure_for_testing, DatabaseModule()])
handler = injector.get(RequestHandler)
print(handler.get())
handler.close()
print(injector.get(Configuration) is injector.get(Configuration))
print(injector.get(sqlite3.Connection) is injector.get(sqlite3.Connection))
