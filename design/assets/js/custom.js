let form = document.getElementById("comment-form");
form.addEventListener('submit', function(event){
    event.preventDefault()
    let name = document.getElementById('name').value
    let email = document.getElementById("email").value;
    // let phone = document.getElementById("phone").value;
    // let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;

    window.location.href = `mailto:sales@green-mayors.com?subject=Enquiry from ${name} ${email}  &body= ${message}`;

   contact();
})