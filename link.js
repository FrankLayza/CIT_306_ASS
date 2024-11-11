const userForm  = document.getElementById('user-form')
const scriptURL = 'https://script.google.com/macros/s/AKfycbzdUp2eo1V2nqHCDm1ZNdxe8SI3vVIDBCA_5segWXuiQmGePRZzDwNPO6tnWsh-2Z1m/exec'

userForm.addEventListener('submit', e => {
    e.preventDefault();
    const formData = new FormData(userForm);

    fetch(scriptURL, { method: 'POST', body: formData})
    .then(res => alert('form submitted'))
    .catch(error => alert('Error', error.message))
})