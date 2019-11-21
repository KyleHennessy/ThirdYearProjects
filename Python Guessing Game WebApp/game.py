##Kyle Hennessy
##C00227463
##Assignment 1

from flask import Flask, render_template, request, session
import random
import time
import pickle


app = Flask(__name__)


@app.route("/")
def home():
    return "Enter /game into the url to start game or /highscore to view players scores"


@app.route("/game", methods=["POST", "GET"])
def display_game_page():
    session["ranNum"] = random.randint(1, 1000)
    session["guessCount"] = 0
    session["startTime"] = time.time()
    return render_template("game.html", the_title="Enter in your number")


@app.route("/attempt", methods=["POST"])
def process_game():
    guess = int(request.form["guessNumber"])
    guessCountToInt = int(session["guessCount"])
    guessCountToInt = guessCountToInt + 1
    session["guessCount"] = str(guessCountToInt)

    if guess > session["ranNum"]:
        return render_template(
            "attempt.html",
            the_title="Number is too high",
            value=guess,
            ##ranValue=session["ranNum"],
            message="is too high",
        )
    elif guess < session["ranNum"]:
        return render_template(
            "attempt.html",
            the_title="Number is too low",
            value=guess,
            ##ranValue=session["ranNum"],
            message="is too low",
        )
    elif guess == session["ranNum"]:
        session["elapsedTime"] = round(time.time() - int(session["startTime"]), 2)
        return render_template("correct.html", the_title="You have won!")

    return render_template("game.html", the_title="Number Guessing Game")


@app.route("/record", methods=["POST", "GET"])
def record_result():
    name = request.form["name"]
    result = [session["elapsedTime"], session["guessCount"], name]
    with open("scores.pickle", "rb") as pf:
        try:
            scores = list(pickle.load(pf))

        except:
            scores = list()

    scores.append(result)
    sortedScores = sorted(scores)

    position = (
        sortedScores.index([session["elapsedTime"], session["guessCount"], name]) + 1
    )
    with open("scores.pickle", "wb") as pf:
        pickle.dump(scores, pf)

    return render_template(
        "/finished.html", the_title="Congratulations!", place=position
    )


@app.route("/highscore")
def display_scores():
    with open("scores.pickle", "rb") as pf:
        data = sorted(pickle.load(pf))

    return render_template(
        "highscore.html", the_title="Here are the results", recordList=data
    )


app.secret_key = "uhkjeigj4o9597fl"


if __name__ == "__main__":
    app.run(debug=True)
