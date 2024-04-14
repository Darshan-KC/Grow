document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".underline-on-click");

    links.forEach((link) => {
      link.addEventListener("click", function () {
        links.forEach((l) => l.classList.remove("active"));
        this.classList.add("active");
      });
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    // Get references to the sections
    const quizSection = document.getElementById("quizSection");
    const certificateSection = document.getElementById("certificateSection");
    const learningVideos = document.getElementById("learningVideos");
    const learningMaterial = document.getElementById("learningMaterials");

    // Get references to the links
    const quizLink = document.getElementById("quizLink");
    const certificateLink = document.getElementById("certificateLink");

    // Initially hide the sections

    // Add click event listeners to the links
    quizLink.addEventListener("click", function () {
      learningMaterial.style.display = "block";
      learningVideos.style.display = "block";
      quizSection.style.display = "block";
      certificateSection.style.display = "block";
    });

    certificateLink.addEventListener("click", function () {
      quizSection.style.display = "block";
      certificateSection.style.display = "block";
      learningVideos.style.display = "none";
      learningMaterial.style.display = "none";
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    // Get references to the sections
    const learningVideosSection = document.getElementById("videos");
    const learningMaterialsSection = document.getElementById("Materials");
    const quizSection = document.getElementById("quiz");
    const certificateSection = document.getElementById("certificate");
    const allSection = document.getElementById("allsection");
    const iframeSection = document.getElementById("iframe");
    const cardSection = document.getElementById("card");
    const learningIframe = document.getElementById("learningIframe");


    // Get references to the angle icons
    const learningVideosAngleUp = document.getElementById(
      "learningVideosAngleUp"
    );
    const learningVideosAngleDown = document.getElementById(
      "learningVideosAngleDown"
    );

    const learningMaterialsAngleUp = document.getElementById(
      "learningMaterialsAngleUp"
    );
    const learningMaterialsAngleDown = document.getElementById(
      "learningMaterialsAngleDown"
    );

    const quizAngleUp = document.getElementById("quizAngleUp");
    const quizAngleDown = document.getElementById("quizAngleDown");

    const certificateAngleUp = document.getElementById("certificateAngleUp");
    const certificateAngleDown = document.getElementById("certificateAngleDown");

    const angleLeft = document.getElementById("Angleleft");
    const angleRight = document.getElementById("Angleright");

    // Add click event listeners to the angle icons
    learningVideosAngleUp.addEventListener("click", function () {
      learningVideosSection.style.display = "none";
      learningVideosAngleUp.style.display = "none";
      learningVideosAngleDown.style.display = "inline";
    });

    learningVideosAngleDown.addEventListener("click", function () {
      learningVideosSection.style.display = "block";
      learningVideosAngleDown.style.display = "none";
      learningVideosAngleUp.style.display = "inline";
    });

    learningMaterialsAngleUp.addEventListener("click", function () {
      learningMaterialsSection.style.display = "none";
      learningMaterialsAngleUp.style.display = "none";
      learningMaterialsAngleDown.style.display = "inline";
    });
    learningMaterialsAngleDown.addEventListener("click", function () {
      learningMaterialsSection.style.display = "block";
      learningMaterialsAngleDown.style.display = "none";
      learningMaterialsAngleUp.style.display = "inline";
    });
    quizAngleUp.addEventListener("click", function () {
      quizSection.style.display = "none";
      quizAngleUp.style.display = "none";
      quizAngleDown.style.display = "inline";
    });
    quizAngleDown.addEventListener("click", function () {
      quizSection.style.display = "block";
      quizAngleDown.style.display = "none";
      quizAngleUp.style.display = "inline";
    });
    certificateAngleUp.addEventListener("click", function () {
      certificateSection.style.display = "none";
      certificateAngleUp.style.display = "none";
      certificateAngleDown.style.display = "inline";
    });
    certificateAngleDown.addEventListener("click", function () {
      certificateSection.style.display = "block";
      certificateAngleDown.style.display = "none";
      certificateAngleUp.style.display = "inline";
    });

    angleLeft.addEventListener("click", function () {
      iframeSection.classList.toggle("fullscreen");

      // iframeSection.className+= " fullscreen";
      allSection.style.display = "none";
      angleRight.style.display = "block";
      angleLeft.style.display = "none";

    });
    angleRight.addEventListener("click", function () {
      allSection.style.display = "block";
      iframeSection.classList.toggle("fullscreen");
      angleRight.style.display = "none";
      angleLeft.style.display = "block";
      // iframeSection.style.display="block";
      // iframeSection.className= "learningIframe";
    });

    learningVideosAngleDown.style.display = "none";
    learningMaterialsAngleDown.style.display = "none";
    quizAngleDown.style.display = "none";
    certificateAngleDown.style.display = "none";
    angleRight.style.display = "none";
  });
