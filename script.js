  // ------------------------ visitor section - 5 -----------------------------//
    const showMoreBtn1 = document.getElementById('show-more-btn');
   const cardsContainer = document.getElementById('cards-container');

   const allNewCards = [
    [
      {
        imgSrc: "/images/Construction Consultants.png",
        imgAlt: "Group of construction professionals discussing plans with a construction sketch background",
        title: "Construction Consultants",
        description: "Specialists providing expert advice and innovative solutions to optimize construction processes and project outcomes."
      },
      {
        imgSrc: "/images/Architects.png",
        imgAlt: "Architect reviewing building plans with a construction sketch background",
        title: "Architects",
        description: "Designers of buildings and structures, ensuring aesthetic appeal, functionality, and compliance with regulations."
      },
      {
        imgSrc: "/images/Safety Inspectors.png",
        imgAlt: "Safety inspectors checking construction site with a construction sketch background",
        title: "Safety Inspectors",
        description: "Professionals ensuring construction sites meet safety standards to protect workers and the public."
      },
      {
        imgSrc: "/images/Material Suppliers.png",
        imgAlt: "Material suppliers delivering construction materials with a construction sketch background",
        title: "Material Suppliers",
        description: "Providers of quality materials essential for construction projects, ensuring timely delivery and reliability."
      }
    ],
    [
      {
        imgSrc: "/images/Urban Planners.png",
        imgAlt: "Urban planners discussing city layouts with a construction sketch background",
        title: "Urban Planners",
        description: "Professionals who develop plans and programs for land use in urban areas, balancing development and sustainability."
      },
      {
        imgSrc: "/images/Surveyors.png",
        imgAlt: "Surveyors measuring land with equipment and a construction sketch background",
        title: "Surveyors",
        description: "Experts who measure and map land boundaries to support construction and development projects."
      },
      {
        imgSrc: "/images/Environmental Consultants.png",
        imgAlt: "Environmental consultants assessing site conditions with a construction sketch background",
        title: "Environmental Consultants",
        description: "Advisors who ensure construction projects comply with environmental regulations and sustainability goals."
      },
      {
        imgSrc: "/images/Quantity Surveyors.png",
        imgAlt: "Quantity surveyors calculating costs with documents and a construction sketch background",
        title: "Quantity Surveyors",
        description: "Professionals managing costs and contracts to ensure construction projects stay within budget."
      }
    ]
   ];

   let currentBatch = 0;

   function createCard(card) {
     const cardDiv = document.createElement('div');
     cardDiv.className = "flex bg-[#eaf4fc] rounded-[30px] overflow-hidden";

     const img = document.createElement('img');
     img.src = card.imgSrc;
     img.alt = card.imgAlt;
     img.className = "w-[150px] h-[150px] object-cover rounded-l-[30px]";
     img.width = 150;
     img.height = 150;

     const contentDiv = document.createElement('div');
     contentDiv.className = "p-6 flex flex-col justify-center";

     const h3 = document.createElement('h3');
     h3.className = "font-bold text-gray-800 text-lg leading-tight";
     h3.textContent = card.title;

     const p = document.createElement('p');
     p.className = "text-gray-500 text-sm leading-relaxed max-w-[320px] mt-1";
     p.textContent = card.description;

     contentDiv.appendChild(h3);
     contentDiv.appendChild(p);

     cardDiv.appendChild(img);
     cardDiv.appendChild(contentDiv);

     return cardDiv;
   }

   showMoreBtn1.addEventListener('click', () => {
     if (currentBatch < allNewCards.length) {
       allNewCards[currentBatch].forEach(card => {
         const cardElement = createCard(card);
         cardsContainer.appendChild(cardElement);
       });
       currentBatch++;
       if (currentBatch === allNewCards.length) {
         showMoreBtn1.disabled = true;
         showMoreBtn1.classList.add('opacity-50', 'cursor-not-allowed');
       }
     }
   });
    //  -------------------------------------------------------------------------//
    //-------------------------------------- new cards effects---------------------------------------//
       document.addEventListener("DOMContentLoaded", function () {
    const containers = document.getElementById("cards-containers");
    const showMoreBtns = document.getElementById("show-more-btns");

    // Sample unique data for cards (extended with more items)
    const cardData = [
     {
      title: "Concrete And Cement Manufacturers",
      description: "The foundation of infrastructure. These essential materials ensure strength, longevity, and resilience in modern construction, powering India’s urban expansion and smart city developments.",
      imgAlt: "Drones flying in the sky with AI holograms and futuristic cityscape in the background",
      imgSrc: "./images/Concrete-And-Cement Manufacturers.png"
     },
     {
      title: "Construction Chemicals",
      description: "Driving performance. From waterproofing and adhesives to surface coatings and admixtures, construction chemicals improve the quality and life span of buildings.",
      imgAlt: "Drones flying over lush green fields with a sunset sky",
      imgSrc: "./images/Construction-Chemicals.png"
     },
     {
      title: "Construction Safety & Security System",
      description: "Protecting people and progress. Advanced safety gear, surveillance tech, and smart access control systems make sites safer for workers and secure against threats.",
      imgAlt: "Construction Safety & Security System",
      imgSrc: "./images/Construction-Safety-&-Security-System.png"
     },
     {
      title: "Sheet Plates and Coils",
      description: "The building blocks of modern structures. Widely used for cladding, roofing, and architectural design, these materials offer strength, durability, and design flexibility.",
      imgAlt: "Sheet Plates and Coils",
      imgSrc: "./images/Sheet-Plates-and-Coils.png"
     },
     {
      title: "Precision Steel CR Tubes",
      description: "Engineered for excellence. Cold rolled tubes provide high accuracy and are vital in load-bearing frameworks and precision-based applications.",
      imgAlt: "Precision Steel CR Tubes",
      imgSrc: "./images/Precision-Steel-CR Tubes.png"
     },
     {
      title: "Cold Rolled Pipes",
      description: "These pipes deliver unmatched durability and dimensional accuracy—ideal for structural, engineering, and mechanical systems.",
      imgAlt: "Cold Rolled Pipes",
      imgSrc: "./images/Cold Rolled Pipes.png"
     },
     {
      title: "Precast Technologies",
      description: "Build smarter, faster. Precast concrete systems ensure quality, reduce on-site time, and minimize construction waste.",
      imgAlt: "Precast Technologies",
      imgSrc: "./images/Precast Technologies.png"
     },
     {
      title: "Scaffolding",
      description: "The backbone of vertical progress. Essential for safety and efficiency in high-rise or complex construction work.",
      imgAlt: "Scaffolding",
      imgSrc: "./images/Scaffolding.png"
     },
     {
      title: "Pipes, Fittings, & Pumping Solutions",
      description: "Keep infrastructure flowing. Ensure seamless water, gas, and fluid transport across industrial and residential developments.",
      imgAlt: "Pipes, Fittings, & Pumping Solutions",
      imgSrc: "./images/Pipes, Fittings, & Pumping Solutions.png"
     },
     {
      title: "CDW Pipes",
      description: "Cold Drawn Welded pipes offer strength and finish for structural and industrial usage, meeting exact specifications and load requirements.",
      imgAlt: "CDW Pipes",
      imgSrc: "./images/CDW Pipes.png"
     },
     {
      title: "Hot Rolled Steel",
      description: "Ideal for bridges, high-rise buildings, and industrial infrastructure—this material provides strength at scale.",
      imgAlt: "Hot Rolled Steel",
      imgSrc: "./images/Hot Rolled Steel.png"
     },
     {
      title: "Oval Tube & D Shape Tubes",
      description: "Stylish and strong. These uniquely shaped tubes offer innovative design potential for architectural and furniture applications.",
      imgAlt: "Oval Tube & D Shape Tubes",
      imgSrc: "./images/Oval Tube & D Shape Tubes.png"
     },
     {
      title: "Round CRCA Tubes",
      description: "Precision meets performance. CRCA (Cold Rolled Close Annealed) tubes are ideal for mechanical frameworks requiring smooth finishes.",
      imgAlt: "Round CRCA Tubes",
      imgSrc: "./images/Round CRCA Tubes.png"
     },
     {
      title: "Coated Coil",
      description: "Strength with surface protection. Used in roofing and paneling, these coils resist corrosion and weathering while offering clean finishes.",
      imgAlt: "Coated Coil",
      imgSrc: "./images/Coated Coil (2).png"
     },
     {
      title: "Rebar",
      description: "Invisible yet invaluable. Reinforcing bars add crucial tensile strength to concrete structures, ensuring safety and longevity.",
      imgAlt: "Rebar",
      imgSrc: "./images/Rebar.png"
     },
     {
      title: "Construction Heavy Machinery",
      description: "The powerhouses of progress. From excavators to cranes, these machines handle large-scale operations with efficiency and speed.",
      imgAlt: "Construction Heavy Machinery",
      imgSrc: "./images/Construction Heavy Machinery.png"
     },
     {
      title: "Construction Equipment",
      description: "Tools that get the job done—from mixers to compactors, every tool matters in timely, efficient construction.",
      imgAlt: "Construction Equipment",
      imgSrc: "./images/Construction Equipment.png"
     },
     {
      title: "Crushing & Conveying Equipment",
      description: "Boosting productivity. These machines handle raw material processing and transport, crucial for mining ...",
      imgAlt: "Crushing & Conveying Equipment",
      imgSrc: "./images/Crushing & Conveying Equipment.png"
     },
     {
      title: "Wire Rods",
      description: "Versatile steel rods used across reinforcement, wire production, and fabrication. Known for flexibility and strength.",
      imgAlt: "Wire Rods",
      imgSrc: "./images/Wire Rods.png"
     },
     {
      title: "Corrugated Plates",
      description: "Durable and weather-resistant. Common in roofing and cladding, especially in industrial zones and rural infrastructure.",
      imgAlt: "Corrugated Plates",
      imgSrc: "./images/Corrugated Plates.png"
     },
     {
      title: "AI Solutions – Unmanned Aerial Vehicles (Drones)",
      description: "Eyes in the sky. AI-enabled drones offer site mapping, safety audits, and real-time progress reports—changing the way we build.",
      imgAlt: "AI Solutions – Unmanned Aerial Vehicles (Drones)",
      imgSrc: "./images/AI Solutions – Unmanned Aerial Vehicles (Drones).png"
     },
     {
      title: "Electrical Steel",
      description: "Magnetic excellence. Essential in energy-efficient motors, transformers, and power equipment that fuel modern infrastructure.",
      imgAlt: "Electrical Steel",
      imgSrc: "./images/Electrical Steel.png"
     },
     {
      title: "Structural Steel Fabrication",
      description: "The art and science of shaping infrastructure. Fabricated steel components are tailored for high-performance buildings, bridges, and megaprojects.",
      imgAlt: "Structural Steel Fabrication",
      imgSrc: "./images/Structural Steel Fabrication.png"
     }
    ];

    // show card and hover the descripation
function createCard(data) {
  const card = document.createElement("div");
  card.className =
    "card relative rounded-lg overflow-hidden shadow-lg w-[200px] h-[200px] cursor-pointer group";

  card.innerHTML = `
    <!-- Card image -->
    <img alt="${data.imgAlt}" class="w-full h-full object-cover" src="${data.imgSrc}" />

    <!-- Title overlay (fades out on hover) -->
    <div class="absolute bottom-0 left-0 right-0 text-white bg-gradient-to-t from-black/80 to-transparent p-2 z-10 opacity-100 transition-all duration-300 group-hover:opacity-0">
      <h2 class="text-lg font-normal">${data.title}</h2>
      <div class="w-12 h-0.5 bg-blue-400 mb-1.5"></div>
    </div>

    <!-- Description overlay (fades in on hover) -->
    <div class="absolute inset-x-3 bottom-10 bg-black/80 text-white text-xs p-2 rounded-md opacity-0 translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 z-20">
      ${data.description}
    </div>
  `;

  return card;
}



    // Track how many cards are currently shown
    let cardsShown = 0;
    const cardsPerLoad = 8;

    // Load cards in batches
    function loadCards() {
     const nextCards = cardData.slice(cardsShown, cardsShown + cardsPerLoad);
     nextCards.forEach((data) => {
      containers.appendChild(createCard(data));
     });
     cardsShown += nextCards.length;

     // If no more cards to load, hide the button
     if (cardsShown >= cardData.length) {
      showMoreBtns.style.display = "none";
     }
    }

    loadCards();

    showMoreBtns.addEventListener("click", () => {
     const currentHeight = containers.scrollHeight;
     loadCards();
     // Smooth scroll to newly added cards
     window.scrollTo({
      top: currentHeight + containers.offsetTop,
      behavior: "smooth"
     });
    });
   });
  //  -----------------------------------------------------------------------------//
 //----------------------------------- infinte scrolling effects-------------------------------------------//
 document.addEventListener("DOMContentLoaded", function () {
      const cardsWrapper = document.getElementById("cards-wrapper");

      const cardData = [
       {
          title: "Concrete And Cement Manufacturers",
          description:
            "The foundation of infrastructure. These essential materials ensure strength, longevity, and resilience in modern construction, powering India’s urban expansion and smart city developments.",
          imgAlt:
            "Drones flying in the sky with AI holograms and futuristic cityscape in the background",
          imgSrc:
            "./images/Concrete-And-Cement Manufacturers.png",
        },
        {
          title: "Construction Chemicals",
          description:
            "Driving performance. From waterproofing and adhesives to surface coatings and admixtures, construction chemicals improve the quality and life span of buildings.",
          imgAlt: "Drones flying over lush green fields with a sunset sky",
          imgSrc: "./images/Construction-Chemicals.png",
        },
        {
          title: "Construction Safety & Security System",
          description:
            "Protecting people and progress. Advanced safety gear, surveillance tech, and smart access control systems make sites safer for workers and secure against threats.",
          imgAlt: "Construction Safety & Security System",
          imgSrc:
            "./images/Construction-Safety-&-Security-System.png",
        },
        {
          title: "Sheet Plates and Coils",
          description:
            "The building blocks of modern structures. Widely used for cladding, roofing, and architectural design, these materials offer strength, durability, and design flexibility.",
          imgAlt: "Sheet Plates and Coils",
          imgSrc: "./images/Sheet-Plates-and-Coils.png",
        },
        {
          title: "Precision Steel CR Tubes",
          description:
            "Engineered for excellence. Cold rolled tubes provide high accuracy and are vital in load-bearing frameworks and precision-based applications.",
          imgAlt: "Precision Steel CR Tubes",
          imgSrc:
            "./images/Precision-Steel-CR Tubes.png",
        },
        {
          title: "Cold Rolled Pipes",
          description:
            "These pipes deliver unmatched durability and dimensional accuracy—ideal for structural, engineering, and mechanical systems.",
          imgAlt: "Cold Rolled Pipes",
          imgSrc: "./images/Cold Rolled Pipes.png",
        },
        {
          title: "Precast Technologies",
          description:
            "Build smarter, faster. Precast concrete systems ensure quality, reduce on-site time, and minimize construction waste.",
          imgAlt: "Precast Technologies",
          imgSrc: "./images/Precast Technologies.png",
        },
        {
          title: "Scaffolding",
          description:
            "The backbone of vertical progress. Essential for safety and efficiency in high-rise or complex construction work.",
          imgAlt: "Scaffolding",
          imgSrc: "./images/Scaffolding.png",
        },
        {
          title: "Pipes, Fittings, & Pumping Solutions",
          description:
            "Keep infrastructure flowing. Ensure seamless water, gas, and fluid transport across industrial and residential developments.",
          imgAlt: "Pipes, Fittings, & Pumping Solutions",
          imgSrc:
            "./images/Pipes, Fittings, & Pumping Solutions.png",
        },
        {
          title: "CDW Pipes",
          description:
            "Cold Drawn Welded pipes offer strength and finish for structural and industrial usage, meeting exact specifications and load requirements.",
          imgAlt: "CDW Pipes",
          imgSrc: "./images/CDW Pipes.png",
        },
        {
          title: "Hot Rolled Steel",
          description:
            "Ideal for bridges, high-rise buildings, and industrial infrastructure—this material provides strength at scale.",
          imgAlt: "Hot Rolled Steel",
          imgSrc: "./images/Hot Rolled Steel.png",
        },
        {
          title: "Oval Tube & D Shape Tubes",
          description:
            "Stylish and strong. These uniquely shaped tubes offer innovative design potential for architectural and furniture applications.",
          imgAlt: "Oval Tube & D Shape Tubes",
          imgSrc:
            "./images/Oval Tube & D Shape Tubes.png",
        },
        {
          title: "Round CRCA Tubes",
          description:
            "Precision meets performance. CRCA (Cold Rolled Close Annealed) tubes are ideal for mechanical frameworks requiring smooth finishes.",
          imgAlt: "Round CRCA Tubes",
          imgSrc: "./images/Round CRCA Tubes.png",
        },
      ];

      // Create a single card element
      function createCard(data) {
        const card = document.createElement("div");
        card.className =
          "card relative rounded-lg overflow-hidden shadow-lg w-[280px] h-full flex-shrink-0 cursor-pointer group bg-white";

        card.innerHTML = `
          <img alt="${data.imgAlt}" class="w-full h-full object-cover" src="${data.imgSrc}" />
          <div class="absolute bottom-0 left-0 right-0 text-white bg-gradient-to-t from-black/80 to-transparent p-3 z-10 opacity-100 transition-all duration-300 group-hover:opacity-0">
            <h2 class="text-lg font-normal">${data.title}</h2>
            <div class="w-14 h-0.5 bg-blue-400 mb-1.5"></div>
          </div>
          <div class="absolute inset-x-4 bottom-14 bg-black/80 text-white text-xs p-2 rounded-md opacity-0 translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 z-20">
            ${data.description}
          </div>
        `;

        return card;
      }

      // Append cards twice for seamless infinite scroll
      function appendCardsTwice() {
        // Clear existing cards if any
        cardsWrapper.innerHTML = "";

        // Append original cards
        cardData.forEach((data) => {
          cardsWrapper.appendChild(createCard(data));
        });
        // Append duplicate cards
        cardData.forEach((data) => {
          cardsWrapper.appendChild(createCard(data));
        });
      }

      appendCardsTwice();

      let scrollPos = 0;
      const scrollSpeed = 2; // pixels per frame, adjust for speed

      function animateScroll() {
        scrollPos += scrollSpeed;
        if (scrollPos >= cardsWrapper.scrollWidth / 2) {
          scrollPos = 0;
        }
        cardsWrapper.style.transform = `translateX(-${scrollPos}px)`;
        requestAnimationFrame(animateScroll);
      }

      animateScroll();

      // Pause on hover
      cardsWrapper.addEventListener("mouseenter", () => {
        scrollSpeedBackup = scrollSpeed;
        scrollSpeed = 0;
      });
      cardsWrapper.addEventListener("mouseleave", () => {
        scrollSpeed = 2;
      });
    });
 //----------------------------------- End infinte scrolling effects-------------------------------------------// 
  //----------------------------------- infinte scrolling effects - 2 -------------------------------------------// 
  
    document.addEventListener("DOMContentLoaded", function () {
      const cardsWrapper = document.getElementById("cards-wrapper2");
      const cardData = [
        {
          title: "Coated Coil",
          description:
            "Strength with surface protection. Used in roofing and paneling, these coils resist corrosion and weathering while offering clean finishes.",
          imgAlt: "Coated Coil",
          imgSrc: "./images/Coated Coil (2).png",
        },
        {
          title: "Rebar",
          description:
            "Invisible yet invaluable. Reinforcing bars add crucial tensile strength to concrete structures, ensuring safety and longevity.",
          imgAlt: "Rebar",
          imgSrc: "./images/Rebar.png",
        },
        {
          title: "Construction Heavy Machinery",
          description:
            "The powerhouses of progress. From excavators to cranes, these machines handle large-scale operations with efficiency and speed.",
          imgAlt: "Construction Heavy Machinery",
          imgSrc:
            "./images/Construction Heavy Machinery.png",
        },
        {
          title: "Construction Equipment",
          description:
            "Tools that get the job done—from mixers to compactors, every tool matters in timely, efficient construction.",
          imgAlt: "Construction Equipment",
          imgSrc: "./images/Construction Equipment.png",
        },
        {
          title: "Crushing & Conveying Equipment",
          description:
            "Boosting productivity. These machines handle raw material processing and transport, crucial for mining ...",
          imgAlt: "Crushing & Conveying Equipment",
          imgSrc:
            "./images/Crushing & Conveying Equipment.png",
        },
        {
          title: "Wire Rods",
          description:
            "Versatile steel rods used across reinforcement, wire production, and fabrication. Known for flexibility and strength.",
          imgAlt: "Wire Rods",
          imgSrc: "./images/Wire Rods.png",
        },
        {
          title: "Corrugated Plates",
          description:
            "Durable and weather-resistant. Common in roofing and cladding, especially in industrial zones and rural infrastructure.",
          imgAlt: "Corrugated Plates",
          imgSrc: "./images/Corrugated Plates.png",
        },
        {
          title: "AI Solutions – Unmanned Aerial Vehicles (Drones)",
          description:
            "Eyes in the sky. AI-enabled drones offer site mapping, safety audits, and real-time progress reports—changing the way we build.",
          imgAlt: "AI Solutions – Unmanned Aerial Vehicles (Drones)",
          imgSrc:
            "./images/AI Solutions – Unmanned Aerial Vehicles (Drones).png",
        },
        {
          title: "Electrical Steel",
          description:
            "Magnetic excellence. Essential in energy-efficient motors, transformers, and power equipment that fuel modern infrastructure.",
          imgAlt: "Electrical Steel",
          imgSrc: "./images/Electrical Steel.png",
        },
        {
          title: "Structural Steel Fabrication",
          description:
            "The art and science of shaping infrastructure. Fabricated steel components are tailored for high-performance buildings, bridges, and megaprojects.",
          imgAlt: "Structural Steel Fabrication",
          imgSrc:
            "./images/Structural Steel Fabrication.png",
        },
      ];

      // Create a single card element
      function createCard(data) {
        const card = document.createElement("div");
        card.className =
          "card relative rounded-lg overflow-hidden shadow-lg w-[280px] h-full flex-shrink-0 cursor-pointer group bg-white";

        card.innerHTML = `
          <img alt="${data.imgAlt}" class="w-full h-full object-cover" src="${data.imgSrc}" />
          <div class="absolute bottom-0 left-0 right-0 text-white bg-gradient-to-t from-black/80 to-transparent p-3 z-10 opacity-100 transition-all duration-300 group-hover:opacity-0">
            <h2 class="text-lg font-normal">${data.title}</h2>
            <div class="w-14 h-0.5 bg-blue-400 mb-1.5"></div>
          </div>
          <div class="absolute inset-x-4 bottom-14 bg-black/80 text-white text-xs p-2 rounded-md opacity-0 translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 z-20">
            ${data.description}
          </div>
        `;

        return card;
      }

      // Append cards twice for seamless infinite scroll
      function appendCardsTwice() {
        cardsWrapper.innerHTML = "";

        cardData.forEach((data) => {
          cardsWrapper.appendChild(createCard(data));
        });
        cardData.forEach((data) => {
          cardsWrapper.appendChild(createCard(data));
        });
      }

      appendCardsTwice();

      let scrollPos = cardsWrapper.scrollWidth / 2; // start at the duplicated end
      let scrollSpeed = 2; // pixels per frame, adjust speed here

      function animateScroll() {
        scrollPos -= scrollSpeed; // move left to right means decreasing translateX
        if (scrollPos <= 0) {
          scrollPos = cardsWrapper.scrollWidth / 2;
        }
        cardsWrapper.style.transform = `translateX(-${scrollPos}px)`;
        requestAnimationFrame(animateScroll);
      }

      animateScroll();

      // Pause on hover
      cardsWrapper.addEventListener("mouseenter", () => {
        scrollSpeedBackup = scrollSpeed;
        scrollSpeed = 0;
      });
      cardsWrapper.addEventListener("mouseleave", () => {
        scrollSpeed = 2;
      });
    });
  
  //----------------------------------- end infinte scrolling effects - 2 -------------------------------------------//
  //----------------------------------- infinite scrolling effect - 3 ----------------------------------------------//
       const cardsWrapper3 = document.getElementById("cards-wrapper3");

    const rowsData3 = [
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/150d9e37-a80d-448f-15a4-126ae35c5118.jpg",
          alt: "Person in red shirt applying roof treatment on a flat surface with a long-handled tool",
          text: "Roof Treatment & Damp Proofing Solutions",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/2f6ae628-f76b-40f9-166f-6140f67e11b1.jpg",
          alt: "Ready-mix concrete plant with green silos and machinery on dirt ground",
          text: "Paint Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/5483952b-0ecb-486e-59eb-ccef507881de.jpg",
          alt: "Precast concrete curved slabs stacked outdoors on concrete floor",
          text: "Color Pigments Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/c01ca388-b38d-49b8-ec48-09d96668b450.jpg",
          alt: "Person in protective gear spraying PU coating on a surface",
          text: "PU Coang Manufacturers",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/4373c81f-7b49-4dc5-62d4-ca78e58bda1c.jpg",
          alt: "Coiled steel sheets stacked in a factory with reflective floor and ceiling lights",
          text: "Coated Steel Sheet Manufacturers",
        },
        {
          imgSrc: "images/INDIAN-RAILWAYS.jpeg",
          alt: "Innovative concrete technology demonstration",
          text: "Railway Bridges",
        },
        {
          imgSrc: "images/NHAI.jpeg",
          alt: "Sustainable concrete materials and practices",
          text: "Tunnels",
        },
        {
          imgSrc: "images/NHIDCL.jpeg",
          alt: "Concrete equipment available for rent",
          text: "DRDO Projects",
        },
      ],
      [
        {
          imgSrc: "images/INNOVATIONS-IN-NHAI.jpeg",
          alt: "Concrete equipment available for rent",
          text: "Green Projects",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/150d9e37-a80d-448f-15a4-126ae35c5118.jpg",
          alt: "Person in red shirt applying roof treatment on a flat surface with a long-handled tool",
          text: "Roof Treatment & Damp Proofing Solutions",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/226603f6-69d8-484a-896a-53ad21016372.jpg",
          alt: "Large industrial paint mixing tanks in a factory setting",
          text: "Paint Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/53bc71bd-3344-4a86-283b-3a0b2cc14023.jpg",
          alt: "Containers and buckets filled with color pigments in a workshop",
          text: "Color Pigments Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/c01ca388-b38d-49b8-ec48-09d96668b450.jpg",
          alt: "Person in protective gear spraying PU coating on a surface",
          text: "PU Coang Manufacturers",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/dd9e213d-0e0e-4dab-022c-1306616e899e.jpg",
          alt: "Sealant application tool dispensing sealant on brick surface",
          text: "Sealant Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/34c9e81d-fcf7-436a-d0c3-111f60d9e6b0.jpg",
          alt: "Blue adhesive manufacturing machine with barrels",
          text: "Adhesive Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/6ffbd29c-fdb2-4684-44cf-8efa9ee28280.jpg",
          alt: "Worker in orange uniform repairing crack on road with machinery",
          text: "Crack Repairing Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/38218dfa-9e6a-4773-3fcd-417b6a128ae0.jpg",
          alt: "Woman in white helmet working on real estate architectural plans",
          text: "Real-Estate Firms",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/c6b21497-eb16-400c-9307-3580b9972b4f.jpg",
          alt: "Man in orange helmet working on equipment in factory",
          text: "Construction Equipment Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/e86dcddd-126a-453c-460b-8269a416f344.jpg",
          alt: "Structural steel fabrication workshop with steel frames",
          text: "Structural Steel Fabrication",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/dcf6f875-a15b-4a0d-2b07-d97a0315b132.jpg",
          alt: "Factory interior with workers and steel machinery",
          text: "Electrical Steel Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/05c85c78-a472-43e2-ff7c-cc10ae147110.jpg",
          alt: "Worker in white helmet operating steel machine",
          text: "Angle Manufacturers",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/eb5e099e-0bbd-45f6-63fe-43e4d743213d.jpg",
          alt: "Factory worker in blue jacket standing in front of large steel coil rolls in an industrial warehouse",
          text: "Plates Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/ef041dff-5a48-459d-1b9e-8c391721f3e4.jpg",
          alt: "Stack of red and white paver blocks arranged outdoors",
          text: "Paver Blocks Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/d602b997-38eb-446f-3f14-cfb609477289.jpg",
          alt: "Close-up of a metal mold being drilled by a machine in a workshop",
          text: "Mold Makers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/d8fece67-0c17-45bf-1d58-ca2198d3103c.jpg",
          alt: "Wall with various masonry tools hanging in a workshop",
          text: "Masonry Tool Makers",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/204edaa5-d8c4-4df3-81a7-3aa4b64fd45e.jpg",
          alt: "Safety Equipment with yellow helmet and ear muffs and orange gloves on a wooden surface",
          text: "Safety Equipment Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/b184f900-4f1c-439d-78db-beb3b99988d5.jpg",
          alt: "Industrial and Domestic Flooring with grey floor and metal structure above",
          text: "Industrial & Domestic Flooring",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/0e96ede0-f6aa-410f-e66f-8db5e95ef27d.jpg",
          alt: "Formwork and Scaffolding Manufacturers with yellow scaffolding and construction site",
          text: "Formwork & Scaffolding Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/d2557421-e1e5-4730-a086-33521479bd27.jpg",
          alt: "Pumping Solutions Providers with blue and green pipes and gauges",
          text: "Pumping Solutions Providers",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/5c5107f4-7f58-4d16-98ab-0852054162dd.jpg",
          alt: "CCTV camera mounted on a pole with a blurred building and greenery background",
          text: "CCTV & Security Equipment Companies",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/b15a2554-e80f-47fd-07d2-d36b7cb20fb4.jpg",
          alt: "Worker wearing a yellow helmet operating a construction vehicle inside the cabins",
          text: "Construction Vehicle Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/d9ab2988-c2db-41e5-3535-3354e9d1b41c.jpg",
          alt: "Marble and granite slabs arranged inside a warehouse with overhead lighting",
          text: "Marble & Granite Suppliers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/3f87b14d-b98a-4195-ee33-411cb9d85074.jpg",
          alt: "Stack of red pipes piled up outdoors under a partly cloudy blue sky",
          text: "Pipes Manufacturing Companies",
        },
      ],
      [
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/c85ae953-4901-4d0a-74ad-dbf1bc7016c2.jpg",
          alt: "Commercial drone flying over an empty runway with cloudy sky",
          text: "Commercial Drone Manufacturers",
        },
        {
          imgSrc:
            "https://storage.googleapis.com/a1aa/image/de696414-d162-4180-a62a-6e83ae384c18.jpg",
          alt: "Worker in blue uniform and helmet cutting metal reinforcement bars with power tool",
          text: "Reinforcement Manufacturing Companies",
        },
      ],
    ];

    // Flatten all cards for continuous scroll
    const allCardsFlat = rowsData3.flat();

    // Create card element
    function createCard(card3) {
      const cardDiv = document.createElement("div");
      cardDiv.className = "card3";

      const img = document.createElement("img");
      img.src = card3.imgSrc;
      img.alt = card3.alt;
      img.width = 176;
      img.height = 224;

      const overlay = document.createElement("div");
      overlay.className = "overlay";

      const p = document.createElement("p");
      p.textContent = card3.text;

      overlay.appendChild(p);
      cardDiv.appendChild(img);
      cardDiv.appendChild(overlay);

      return cardDiv;
    }

    // Append cards twice for seamless infinite scroll
    function appendCardsTwice() {
      cardsWrapper3.innerHTML = "";
      allCardsFlat.forEach((card3) => {
        cardsWrapper3.appendChild(createCard(card3));
      });
      allCardsFlat.forEach((card3) => {
        cardsWrapper3.appendChild(createCard(card3));
      });
    }

    appendCardsTwice();

    let scrollPos = cardsWrapper3.scrollWidth / 2; // start at end for left-to-right scroll
    const scrollSpeed = 2; // px per frame

    function animateScroll() {
      scrollPos -= scrollSpeed;
      if (scrollPos <= 0) {
        scrollPos = cardsWrapper3.scrollWidth / 2;
      }
      cardsWrapper3.style.transform = `translateX(-${scrollPos}px)`;
      requestAnimationFrame(animateScroll);
    }

    animateScroll();
  //----------------------------------- end infinite scrolling effect - 3 ----------------------------------------------//
function downloadPDF() {
  const element = document.getElementById('pdf-content');
  const opt = {
    margin:       0.5,
    filename:     'ICE_Expo_Registration_.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
  };
  html2pdf().set(opt).from(element).save();
}