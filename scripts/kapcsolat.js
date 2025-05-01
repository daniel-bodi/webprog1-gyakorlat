document.getElementById("kapcsolat-form").addEventListener("submit", function(e) {
    const nev = document.getElementById("nev").value.trim();
    const email = document.getElementById("email").value.trim();
    const uzenet = document.getElementById("uzenet").value.trim();
    let valid = true;
    let hibak = [];

    const nevRegexp = /[A-Z,a-z, ]{8}[A-Z,a-z, ]*/;
    const emailRegexp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (!nev.match(nevRegexp)) {
        hibak.push("A név nem megfelelő! (Legalább 8 karakter hosszú, kisbetű, nagybetű, szóköz. Kötelező.)");
        valid = false;
    }

    if (!email.match(emailRegexp)) {
        hibak.push("Az e-mail cím nem érvényes. (Kötelező)");
        valid = false;
    }

    if (uzenet.length < 5) {
        hibak.push("Az üzenet túl rövid. (Legalább 5 karakter. Kötelező.)");
        valid = false;
    }

    if (!valid) {
        e.preventDefault();
        alert(hibak.join("\n"));
    }
});
