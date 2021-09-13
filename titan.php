<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Discover Saturne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="titan.css" type="text/css" rel="stylesheet" />

  </head>
  <body>

    <header>
      <img src="https://raw.githubusercontent.com/adimeo-lab/junior-dev-web-test/main/logo.jpg" alt="logo">
    </header>


    <section>
      <h2>Inscrivez-vous pour faire partie des premiers touristes de Titan,<br/>la fameuse lune de Saturne !</h2>
        
      <form class='formGen' method="post" action="phtitan.php"> 
        <div class='form'>
          <p>
            <label for='prenom'>Prénom</label><br/>
            <input
              type='text'
              name='prenom'
              id='prenom'
              size='30'
              required
            />
          </p>
        </div>

        <div class='form'>
          <p>
            <label for='nom'>Nom</label><br/>
            <input
              type='text'
              name='nom'
              id='nom'
              size='30'
              required
            />
          </p>
        </div>
          
        <div class='form'>
          <p>
            <label for='email'>Email</label><br/>
            <input
              type='email'
              name='email'
              id='email'
              size='30'
              required
            />
          </p>
        </div>

        <div class='accep'>
          <p>
            <input
              type='checkbox'
              name='accept'
              id='accept'                           
            />
            <label for='accept'>J'accepte de m'inscrire à la newsletter de Titan</label>
          </p>
        </div>

        <div class='sub'>
          <p>
            <input
              type='submit'
              value='Valider mon inscription'
            />
          </p>
        </div>

      </form>
    </section>

  </body>
</html>