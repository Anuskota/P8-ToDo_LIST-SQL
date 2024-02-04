

document.addEventListener("DOMContentLoaded", function () {
    
    
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener("change", function () {
        var itemText = this.parentNode.textContent;
        if (this.checked) {
            itemText = "<del>" + itemText + "</del>";
        }
        this.parentNode.innerHTML =
            '<input type="checkbox" name="check" checked>' + itemText;
        });
    });
});




