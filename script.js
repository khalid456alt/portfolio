const certificates = [
    {
      year: '2024',
      title: 'IBM Python for Data Science',
      description: 'Certificat obtenu sur Cognitive Class.',
      imgSrc: './certificat/IBM-Certificate.png',
      imgAlt: 'IBM Certificate'
    }
  ];


  const worksList = [
    {
    imgSrc: "images/projet01.webp",
    imgAlt: "Projet 1",
    title: "Site e-commerce",
    description: "Un site e-commerce avec panier en javaScript, bootstrap 5.",
    doc: "./projets/projet01/index.html"
  },
  {
    imgSrc: "images/projet02.png",  
    imgAlt: "Projet 2",
    title: "Application de gestion des stagaire",
    description: "Une application web en PHP/MVC avec API REST.",
    doc: "projets/projet02/index.html"  
  }
];


  function displayCertificates(certificatesList) {
    const container = document.getElementById('certificates-container');

    certificatesList.forEach(cert => {
      const col = document.createElement('div');
      col.className = 'col-md-6'; 

      const card = document.createElement('div');
      card.className = 'work-card';

      const img = document.createElement('img');
      img.src = cert.imgSrc;
      img.alt = cert.imgAlt;
      img.className = 'img-fluid';

      const infoDiv = document.createElement('div');

      const year = document.createElement('small');
      year.className = 'text-muted';
      year.textContent = cert.year;

      const title = document.createElement('h5');
      title.className = 'fw-bold mt-2';
      title.textContent = cert.title;

      const description = document.createElement('p');
      description.textContent = cert.description;

      infoDiv.appendChild(year);
      infoDiv.appendChild(title);
      infoDiv.appendChild(description);

      card.appendChild(img);
      card.appendChild(infoDiv);

      col.appendChild(card);
      container.appendChild(col);
    });
  }

  function displayWorks(worksList) {
  const container = document.getElementById('work-container');

  worksList.forEach(work => {
    const col = document.createElement('div');
    col.className = 'col-md-6';

    const card = document.createElement('div');
    card.className = 'work-card';

    const img = document.createElement('img');
    img.src = work.imgSrc;
    img.alt = work.imgAlt;
    img.className = 'img-fluid';

    const infoDiv = document.createElement('div');

    const title = document.createElement('h5');
    title.className = 'fw-bold mt-2';
    title.textContent = work.title;

    const description = document.createElement('p');
    description.textContent = work.description;

    const instal = document.createElement('a');
    instal.href = work.doc; 
    instal.target = "_blank"; 
    instal.className = "btn btn-primary mt-2"; 
    instal.textContent = "Voir le code source";

    infoDiv.appendChild(title);
    infoDiv.appendChild(description);
    infoDiv.appendChild(instal);

    card.appendChild(img);
    card.appendChild(infoDiv);

    col.appendChild(card);
    container.appendChild(col);
  });
}


  displayCertificates(certificates);
  displayWorks(worksList);