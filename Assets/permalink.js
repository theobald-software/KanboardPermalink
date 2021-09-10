document.addEventListener("click", function (e) {
    if (e.target.id === "permalink-link") {
        e.preventDefault();
        navigator.clipboard.writeText(e.target.href)
            .then(() => alert("Copied!"))
            .catch((reason) => alert("Failed to copy: " + reason));

        return false;
    }
});