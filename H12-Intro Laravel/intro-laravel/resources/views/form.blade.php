<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <div>
      <form action="/welcome" method="post">
        @csrf
        <label for="firstName">First Name</label>
        <br />
        <input type="text" id="firstName" name="fname" />
        <br />
        <label for="lastName">Last Name</label>
        <br />
        <input type="text" id="lastName" name="lname"/>

        <br />
        <p>Gender :</p>
        <input type="radio" id="Male" name="gender" value="Male" />
        <label for="Male">Male</label>
        <br />
        <input type="radio" id="Female" name="gender" value="Female" />
        <label for="Female">Female</label>
        <br />
        <input type="radio" id="Other" name="gender" value="other" />
        <label for="Other">Other</label>
        <br />
        <p>Nationality</p>
        <select name="Nationality" id="Nationality">
          <option value="" disabled selected hidden>Nationality</option>
          <option value="indonesia">indonesia</option>
          <option value="australia">australia</option>
          <option value="belanda">belanda</option>
        </select>
        <br />
        <br />
        language Spoken:
        <br />
        <input type="checkbox" id="indonesia" />
        <label for="indonesia"> Bahasa Indonesia</label><br />
        <input type="checkbox" id="english" />
        <label for="english"> English</label><br />
        <input type="checkbox" id="other" />
        <label for="english"> Other</label><br />
        <br />
        <p>Bio:</p>
        <textarea name="bio" id="bio" rows="4" cols="30"> </textarea>
        <br />
        <input type="submit" />
      </form>
    </div>
  </body>
</html>
