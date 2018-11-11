  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBvRRE34GR01bbweIvhZwVQn3vlectUX1o",
    authDomain: "ecommerce-8d13a.firebaseapp.com",
    databaseURL: "https://ecommerce-8d13a.firebaseio.com",
    projectId: "ecommerce-8d13a",
    storageBucket: "ecommerce-8d13a.appspot.com",
    messagingSenderId: "448270867129"
  };
  firebase.initializeApp(config);
  
const txtEmail = document.getElementById('correo');
const txtPassword = document.getElementById('pass');
const btnLogin = document.getElementById('login');
btnLogin.addEventListener('click', e => {
  const email = txtEmail.value;
  const pass = txtPassword.value;
  const auth = firebase.auth();

  const promesa = auth.signInWithEmailAndPassword(email,pass);
  promesa.catch(e => location.href = "admin/error.php");

});


firebase.auth().onAuthStateChanged(firebaseUser => {
  if (firebaseUser) {
      location.href="admin";
    }
});