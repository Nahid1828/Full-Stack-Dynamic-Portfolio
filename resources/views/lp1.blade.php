<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Interactive Card Design</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background: white;
    display: flex;
    justify-content: center;
    padding: 50px;
  }
  .card {
    background: white;
    width: 300px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.2s;
    overflow: hidden;
  }
  .card:hover {
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    transform: scale(1.03);
  }
  .card-header {
    padding: 20px;
  }
  .card-title {
    font-size: 1.25rem;
    margin: 0 0 8px 0;
  }
  .card-short-desc {
    color: purple;
    font-size: 0.9rem;
    margin: 0;
  }
  .card-detail {
    padding: 0 20px 20px 20px;
    color: #333;
    font-size: 0.9rem;
    line-height: 1.4;
    display: none;
  }
  .card.open .card-detail {
    display: block;
  }
</style>
</head>
<body>

<div class="card" id="interactiveCard">
  <div class="card-header">
    <h3 class="card-title">Card Title</h3>
    <p class="card-short-desc">This is a short description.</p>
  </div>
  <div class="card-detail">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolore molestiae reiciendis reprehenderit voluptas dolor deleniti inventore quasi? Incidunt id nemo modi quo, sed nesciunt nihil dolorum voluptate recusandae exercitationem.
  </div>
</div>

<script>
  const card = document.getElementById('interactiveCard');
  card.addEventListener('click', () => {
    card.classList.toggle('open');
  });
</script>

</body>
</html>
