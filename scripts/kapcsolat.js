document.getElementById("kapcsolat-form").addEventListener("submit", function(e) {
    const nev = document.getElementById("nev").value.trim();
    const email = document.getElementById("email").value.trim();
    const uzenet = document.getElementById("uzenet").value.trim();
    let valid = true;
    let hibak = [];

    if (nev.length < 2) {
        hibak.push("A név túl rövid.");
        valid = false;
    }

    if (!email.includes("@") || email.length < 5) {
        hibak.push("Az e-mail cím nem érvényes.");
        valid = false;
    }

    if (uzenet.length < 5) {
        hibak.push("Az üzenet túl rövid.");
        valid = false;
    }

    if (!valid) {
        e.preventDefault();
        alert(hibak.join("\n"));
    }
});
