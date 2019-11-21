from flask import request, session
import time
import game


def test_up(client):
    response = client.get("/")
    assert response.status_code == 200
    assert (
        b"Enter /game into the url to start game or /highscore to view players scores"
        in response.data
    )


def test_game(client):
    with client.session_transaction() as sess:
        sess["guessCount"] = 0
    response = client.post("/game", data={"guessNumber": "10"})

    assert "guessCount" in session
    assert session["guessCount"] == 0
    assert response.status_code == 200
    assert request.form["guessNumber"] == "10"
    assert response.data.startswith(b"<!DOCTYPE html>") == True


def test_attempt(client):
    with client.session_transaction() as sess:
        sess["guessCount"] = 0
    response = client.post("/attempt", data={"guessNumber": "4"})

    assert "guessCount" in session
    assert session["guessCount"] == "1"
    assert response.status_code == 500
    assert request.form["guessNumber"] == "4"


def test_highscore(client):
    response = client.get("/highscore")
    assert response.status_code == 200


def test_record(client):
    with client.session_transaction() as sess:
        sess["elapsedTime"] = 5.5
        sess["guessCount"] = 6
    response = client.post("/record", data={"name": "Kyle"})
    name = request.form["name"]
    response = client.post("/record")
    assert response.status_code == 400


def test_too_high(client):
    response = client.get("/game")
    response = client.post("/attempt", data={"guessNumber": 1001})
    assert request.method == "POST"
    assert request.form["guessNumber"] == "1001"


def test_too_low(client):
    response = client.get("/game")
    response = client.post("/attempt", data={"guessNumber": 0})
    assert request.method == "POST"
    assert request.form["guessNumber"] == "0"


def test_correct(client):
    response = client.get("/game")
    with client.session_transaction() as sess:
        sess["ranNum"] = 10
    response = client.post("/attempt", data={"guessNumber": 10})
    assert request.method == "POST"
    assert request.form["guessNumber"] == str(session["ranNum"])


def test_result(client):
    with client.session_transaction() as sess:
        sess["elapsedTime"] = 5.59
        sess["guessCount"] = 4
    client.post("/record", data={"name": "Kyle"})
    name = request.form["name"]
    result = [session["elapsedTime"], session["guessCount"], name]
    ##assert result == list()


def test_app(app):
    assert app.secret_key == "uhkjeigj4o9597fl"
