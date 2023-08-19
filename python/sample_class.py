from injector import Injector, inject


class Inner:
    def __init__(self) -> None:
        self.forty_two = 42


class Outer:
    @inject
    def __init__(self, inner: Inner) -> None:
        self.inner = inner

injector = Injector()
outer = injector.get(Outer)
result = outer.inner.forty_two
print(result)