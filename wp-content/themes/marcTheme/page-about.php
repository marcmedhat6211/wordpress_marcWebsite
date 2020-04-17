<?php get_header(); ?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Marc Medhat</h2>
        <p class="title">CEO & Founder</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet excepturi qui expedita molestias quisquam quaerat vero repellendus, nesciunt ullam voluptas minima sapiente non dignissimos veritatis animi nostrum, odio illo dolor!</p>
        <p>marc@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum aliquam alias omnis, ut reprehenderit hic molestias, culpa tenetur necessitatibus molestiae suscipit amet distinctio! Dolores porro sunt cumque inventore, modi in.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum quae et, hic ratione, quibusdam modi fugiat animi voluptate velit, provident officiis unde sed deserunt! In consectetur qui aliquam ipsam!</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>