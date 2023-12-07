function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var comments = document.getElementById('comments').value;
    var satisfaction = document.querySelector('input[name="satisfaction"]:checked');
    var category = document.getElementById('category').value;

    // Simple validation for Name, Email, and Comments
    if (name === '' || email === '' || comments === '' || category==='' || !satisfaction) {
        if (name === '') {
            alert('Please enter name');
        }
        if (email === '' && validateEmail(email)) {
            
            alert('Please enter an email address')
        }

        if (!category) {
            alert('Please choose a catgory')
        }

        if (!satisfaction) {
            alert('Please choose a satisfaction level')
        }

        if (comments === '') {
            alert('Please enter comment')
        }
        return false;
    }

    return true;

}

function validateEmail(fieldId) {
    const field = document.getElementById(fieldId);
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
    if (!regex.test(field.value.trim())) {
        alert('Invalid email address');
        return false;
    }
    return true;
}