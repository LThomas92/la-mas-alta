<style>
.page-login {
    display: flex;
    justify-content: space-between;
    font-family: 'Archivo Narrow', sans-serif;
}

.page-login__form {
    width: 50%;
        display: flex;
        flex-direction: column;
        margin: 2rem;
        background-color: rgba(#e5e5e5, 0.4);
}

.page-login__form p {
    font-size: 0.9rem;
    color: #4e4e4e;
}

.page-login__image {
    width: 50%;
}

.page-login__image img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
}

form[name="login"] {
    display: flex;
    flex-direction: column;
}

form label {
    font-size: 0.8rem;
    color: #4e4e4e;
}

.tml-label {
    display: block;
    padding-bottom: 0.4rem;
}

.tml-login-link {
        background-color: #EDEDED;
        padding: 0.8rem 1.2rem;
    }

    .tml-login-link a {
        text-decoration: none;
            color: black;
            cursor: pointer;
    }

form input[type="text"]{
    padding: 0.6rem 1.2rem;
    width: 100%;
    border: 1.5px solid #dec9a7;
    background-color: transparent;
}

form input[type="password"]{
    padding: 0.6rem 1.2rem;
    width: 100%;
    border: 1.5px solid #dec9a7;
    background-color: transparent;
}

.tml-field-wrap  {
    margin-top: 1.5rem;
}

.tml-rememberme-wrap {
    display: flex;
}

.tml-rememberme-wrap label {
   padding-bottom: 0;
}


button[type="submit"] {
    width: 100%;
    background-color: #dec9a7;
    padding: 0.8rem 1.2rem;
    border: none;
    outline: none;
    color: #000;
    font-weight: 400;
    cursor: pointer;
    }

    button[type="submit"]:hover {
    background-color: black;
    color: white;
    transition: 300ms;
    }

    .tml-links {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: space-between;
        margin-top: 4rem;
    }

    .tml-links .tml-register-link a {
        background-color: #000;
        color: white;
        text-decoration: none;
        padding: 0.8rem 1.2rem;
    }

    
    .tml-links .tml-lostpassword-link a {
        background-color: #e5e5e5;
        color: black;
        text-decoration: none;
        padding: 0.8rem 1.2rem;
    }

    .tml-messages {
        list-style: none;
        padding: 0;
    }

    .tml-message {
        font-size: 0.9rem !important;
        color: #4e4e4e !important;
    }

    @media only screen and (max-width: 800px) {
    .page-login {
    display: flex;
    flex-direction: column !important;
    }

    .page-login__form {
    width: 100%;
        display: flex;
        flex-direction: column;
        margin: 0;
        background-color: rgba(#e5e5e5, 0.4);
}
.page-login__image {
   display:block;
   width: 100%;
   margin-top: 1rem;
}
.page-login__image img {
    width: 100%;
    height: 50vh;
    object-fit: cover;
}

}

</style>

<section class="page-login">
<div class="page-login__form">
<a href="<?php echo site_url();?>"><img src="" alt="La Mãs Alta Logo"></a>
<p>Welcome back! Please login to your account and continue</p>
<?php echo do_shortcode("[theme-my-login]"); ?>
</div> <!-- page login form -->

<div class="page-login__image">
<img src="https://images.unsplash.com/flagged/photo-1557581462-0bf3e5907811?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80" alt="Page Login Image">
</div> <!-- page login image -->
</section> <!-- page login -->