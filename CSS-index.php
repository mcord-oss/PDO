<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header class="heading"><img class="img" width="50" height="50" src="images/images.png" alt="">HTML BASIC</header><br>
    <div class="container">
      <div class="box-1">
        <h1>CASCADING STYLE SHEET</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt veniam harum nulla itaque. Ab temporibus ratione qui odit eos minus asperiores hic aperiam dolor voluptatum itaque et doloribus, necessitatibus corporis a saepe expedita, est blanditiis, sit quasi accusamus? Mollitia impedit autem tempore obcaecati doloremque voluptatum sit architecto assumenda, dolorem explicabo?</p>
      </div><br>
      <div class="box-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eum labore maxime alias consequatur ut architecto animi itaque voluptatem, laborum rerum laudantium ullam explicabo mollitia. Laborum sed ut temporibus commodi ducimus sapiente quaerat, magnam tempora consectetur deleniti libero, distinctio architecto reiciendis unde blanditiis veritatis cumque, quos tenetur similique obcaecati dolorum.</p>
        <a class="btn" href="#">Subscribe</a><br><br>
      </div>
      <div class="list">
        <h1 style="text-align: center;">list style images</h1>
        <ul>
          <p>
            <input type="checkbox" name="check" id="check">&nbsp;&nbsp;&nbsp;<a href="#">CheckBox-1</a>
          </p>
          <p>
            <input type="checkbox" name="check" id="check">&nbsp;&nbsp;&nbsp;<a href="#">CheckBox-2</a>
          </p>
          <p>
            <input type="checkbox" name="check" id="check">&nbsp;&nbsp;&nbsp;<a href="#">CheckBox-3</a>
          </p>
          <p>
            <input type="checkbox" name="check" id="check">&nbsp;&nbsp;&nbsp;<a href="#">CheckBox-4</a>
          </p>
        </ul>
      </div><br>
      <div class="block">
        <h3>heading 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore voluptas reiciendis quisquam voluptatem explicabo labore voluptates nobis est maxime, libero excepturi, odio facere laboriosam, quidem impedit esse! Doloremque, qui maxime expedita corporis consectetur error eveniet obcaecati molestias modi ut in! Assumenda excepturi deleniti at quia accusamus reprehenderit inventore labore ducimus.</p>
      </div>
      <div class="block">
        <h3>heading 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore voluptas reiciendis quisquam voluptatem explicabo labore voluptates nobis est maxime, libero excepturi, odio facere laboriosam, quidem impedit esse! Doloremque, qui maxime expedita corporis consectetur error eveniet obcaecati molestias modi ut in! Assumenda excepturi deleniti at quia accusamus reprehenderit inventore labore ducimus.</p>
      </div>
      <div class="block">
        <h3>heading 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore voluptas reiciendis quisquam voluptatem explicabo labore voluptates nobis est maxime, libero excepturi, odio facere laboriosam, quidem impedit esse! Doloremque, qui maxime expedita corporis consectetur error eveniet obcaecati molestias modi ut in! Assumenda excepturi deleniti at quia accusamus reprehenderit inventore labore ducimus.</p>
      </div>
        <div class="clear-fix"></div>
        <div class="main-block">
          <h3>Block heading 1</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate maiores ex ratione et adipisci officiis distinctio doloribus sed nisi atque mollitia alias repellat delectus dolore soluta, optio tempore fugit vel quae explicabo quod dolorem reiciendis quam voluptas. Deleniti ea nobis sit dolorem reiciendis pariatur soluta omnis commodi mollitia illum porro fugit nihil nam inventore necessitatibus esse, numquam minus quidem asperiores voluptas autem. Beatae ratione eius placeat exercitationem quia itaque. Repudiandae.</p>
        </div>
        <div id="right-sidebar">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi quidem temporibus at suscipit! Ipsum vero voluptatibus, commodi nulla labore nemo dolores necessitatibus impedit, deleniti animi ratione, similique repellendus. Culpa, dolore.</p>
        </div>
        <div class="clear-fix"></div>
      <form action="#" method="post" class="my-form">
        <h1>Forms</h1>
          <p class="form-group">
            <label for="Texts">Texts</label>
            <input type="text" name="fname" id="fname" placeholder="type text here" required value="">
          </p>
          <p class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="type email" required value="">
          </p>
          <p class="form-group">
            <label for="number">number</label>
            <input type="number" name="number" id="number" placeholder="enter number">
          </p>
          <p class="my-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="password" required value="">
          </p>
          <p class="my-group">
            <label for="search">search</label>
            <input type="search" name="search" id="search" placeholder="search" required value="">
          </p>
          <p class="my-group">
            <label for="Hidden Data">Hidden Data</label>
            <input class="btn" type="hidden" name="hidden" value="hidden">
          </p>
          <p class="my-group">
            <label for="image">image</label>
            <input type="image" src="images/gosling.jfif" alt="">
          </p>
          <p class="my-group">
            <label for="checkbox">checkbox</label>
            <input type="checkbox" name="check" id="check">
            <label for="Male">Male</label>
            <input type="checkbox" name="check" id="check">
            <label for="Female">Female</label>
          </p>
          <p class="my-group">
            <label for="radio">radio</label>
            <input type="radio" name="radio" id="radio">
            <label for="Valid">Valid</label>
            <input type="radio" name="radio" id="radio">
            <label for="Is-valid">Is-valid</label>
          </p>
          <p class="myform">
            <label for="color">color</label>
            <input type="color" name="color" id="color" placeholder="color">
          </p>
          <p class="my-group">
            <label for="files">files</label>
            <input type="file" name="file" id="file">
          </p>
          <p class="my-group">
            <label for="Buttons">Buttons</label>
            <input class="btn" type="submit" value="Submit">
          </p><br>
          <p class="my-group">
            <input class="btn" type="reset" value="Reset">
          </p><br>
          <p class="my-group">
            <input class="btn" type="button" value="Button">
          </p>
          <p class="my-group">
            <label for="DATE">DATE</label>
            <input type="date" name="D" id="D">
          </p>
          <p class="my-group">
            <label for="Time">Time</label>
            <input type="time" name="T" id="T">
          </p>
          <p class="my-group">
            <label for="Select">Select</label>
            <select name="Select" id="Select">
              <option value="">option 1</option>
              <option value="">option 2</option>
              <option value="">option 3</option>
              <option value="">option 4</option>
              <option value="">option 5</option>
              <option value="">option 6</option>
              <option value="">option 7</option>
            </select>
          </p>
          <p class="my-group">
            <label for="TextAria">TextAria</label>
            <textarea rows="10" column="10" name="textarea" id="textarea"></textarea>
          </p>
          <p class="my-group">
            <label for="Fieldset">Fieldset</label>
            <fieldset>
              <legend align="center">Information</legend>
              <div class="container-fluid">
                <form action="#" method="post" enctype="multipart/form-data">
                  <p>
                    <input type="file" name="upload" id="upload">
                  </p>
                  <p>
                    <button class="btn" type="submit" name="btn">upload</button>
                  </p>
                </form>
              </div>
            </fieldset>
          </p>
      </form><br>
      <div class="position-box">
        <h1>BASIC CASCADING STYLESHEET</h1>
        <h2>CSS TUTORIALS</h2>
      </div><br>
      <ul class="list">
        <li>list item 1</li>
        <li>list item 2</li>
        <li>list item 3</li>
        <li>list item 4</li>
        <li>list item 5</li>
        <li>list item 6</li>
        <li>list item 7</li>
      </ul>
    </div>
    <a href="#" class="fix-po btn">Fixed</a>
    <footer>&laquo;&copy;&reg;&not;&raquo;</footer>
</body>
</html>