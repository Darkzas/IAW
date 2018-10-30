function showMessage() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var textarea = document.getElementById('textarea').value;

    alert('Name: ' + name + '\n' +
        'Email: ' + email + '\n' +
        'Textarea: ' + textarea);
}