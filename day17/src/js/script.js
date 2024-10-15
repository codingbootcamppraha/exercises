const loadCategoryList = async () => {
  const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/602/guardian.php');
  const data = await response.json();

  const categoryListElem = document.querySelector('.category_list');
  const articleListElem = document.querySelector('.article_list');
  articleListElem.innerHTML = '';

  data.data.forEach((category) => {
    const categoryElem = document.createElement('button');
    categoryElem.innerText = category;
    categoryElem.addEventListener('click', () => handleCategoryClicked(category));
    categoryElem.className = ('btn btn_menu')

    categoryListElem.appendChild(categoryElem);
  });
};

const handleCategoryClicked = async (category) => {
  const response = await fetch(`https://classes.codingbootcamp.cz/assets/classes/602/guardian.php?cat=${category}`);
  const data = await response.json();

  const articleListElem = document.querySelector('.article_list');
  articleListElem.innerHTML = '';

  console.log(data);
  data.data.channel.item.forEach((article) => {
    const articleElem = document.createElement('li');
    articleElem.innerText = article.title;
    articleListElem.appendChild(articleElem);
  })
};

loadCategoryList();


