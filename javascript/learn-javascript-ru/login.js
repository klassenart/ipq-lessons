var userName = prompt("Кто пришел?", "");

if (userName == "Админ") {
    var pass = prompt("Пароль?", "");
    if (pass == "Черный Властелин") {
        alert("Добро пожаловать!");
    } else if (pass == null) {
        alert("Вход отменен");
    } else {
        alert("Не правильно!");
    }
} else if (userName == null) {
    alert("Вход отменен");
} else {
    alert("Я тебя не знаю!");
}