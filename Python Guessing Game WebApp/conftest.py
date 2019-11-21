import game
import pytest
import game as webapp


@pytest.fixture
def app():
    app = webapp.app
    return app
