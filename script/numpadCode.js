function addNumber(num) {
    let text = document.querySelector("textarea");
    text.value += num;

    let lentext = text.value.length;
    if (lentext > 6) {
        text.value = "";
    }
    else if (lentext === 6) {
        if (text.value === "851945") {
            window.location.href = "3_yfUulGAqlJuKZvECmxmx.php";
        }
        else {
            text.value = "";
        }
    }
}