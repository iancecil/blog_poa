<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: "Montserrat", sans-serif;
    }

    body {
        background: #585c68;
        font-size: 14px;
        line-height: 22px;
        color: #555555;
    }

    .bold {
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
    }

    .semi-bold {
        font-weight: 500;
        font-size: 16px;
    }

    .resume {
        width: 800px;
        height: auto;
        display: flex;
        margin: 50px auto;
    }

    .resume .resume_left {
        width: 280px;
        background: #0bb5f4;
    }

    .resume .resume_left .resume_profile {
        width: 100%;
        height: 400px;
    }

    .resume .resume_left .resume_profile img {
        width: 100%;
        height: 100%;
    }

    .resume .resume_left .resume_content {
        padding: 0 25px;
    }

    .resume .title {
        margin-bottom: 20px;
    }

    .resume .resume_left .bold {
        color: #fff;
    }

    .resume .resume_left .regular {
        color: #b1eaff;
    }

    .resume .resume_item {
        padding: 25px 0;
        border-bottom: 2px solid #b1eaff;
    }

    .resume .resume_left .resume_item:last-child,
    .resume .resume_right .resume_item:last-child {
        border-bottom: 0px;
    }

    .resume .resume_left ul li {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
    }

    .resume .resume_left ul li:last-child {
        margin-bottom: 0;
    }

    .resume .resume_left ul li .icon {
        width: 35px;
        height: 35px;
        background: #fff;
        color: #0bb5f4;
        border-radius: 50%;
        margin-right: 15px;
        font-size: 16px;
        position: relative;
    }

    .resume .icon i,
    .resume .resume_right .resume_hobby ul li i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .resume .resume_left ul li .data {
        color: #b1eaff;
    }

    .resume .resume_left .resume_skills ul li {
        display: flex;
        margin-bottom: 10px;
        color: #b1eaff;
        justify-content: space-between;
        align-items: center;
    }

    .resume .resume_left .resume_skills ul li .skill_name {
        width: 25%;
    }

    .resume .resume_left .resume_skills ul li .skill_progress {
        width: 60%;
        margin: 0 5px;
        height: 5px;
        background: #009fd9;
        position: relative;
    }

    .resume .resume_left .resume_skills ul li .skill_per {
        width: 15%;
    }

    .resume .resume_left .resume_skills ul li .skill_progress span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #fff;
    }

    .resume .resume_left .resume_social .semi-bold {
        color: #fff;
        margin-bottom: 3px;
    }

    .resume .resume_right {
        width: 520px;
        background: #fff;
        padding: 25px;
    }

    .resume .resume_right .bold {
        color: #0bb5f4;
    }

    .resume .resume_right .resume_work ul,
    .resume .resume_right .resume_education ul {
        padding-left: 40px;
        overflow: hidden;
    }

    .resume .resume_right ul li {
        position: relative;
    }

    .resume .resume_right ul li .date {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .resume .resume_right ul li .info {
        margin-bottom: 20px;
    }

    .resume .resume_right ul li:last-child .info {
        margin-bottom: 0;
    }

    .resume .resume_right .resume_work ul li:before,
    .resume .resume_right .resume_education ul li:before {
        content: "";
        position: absolute;
        top: 5px;
        left: -25px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        border: 2px solid #0bb5f4;
    }

    .resume .resume_right .resume_work ul li:after,
    .resume .resume_right .resume_education ul li:after {
        content: "";
        position: absolute;
        top: 14px;
        left: -21px;
        width: 2px;
        height: 115px;
        background: #0bb5f4;
    }

    .resume .resume_right .resume_hobby ul {
        display: flex;
        justify-content: space-between;
    }

    .resume .resume_right .resume_hobby ul li {
        width: 80px;
        height: 80px;
        border: 2px solid #0bb5f4;
        border-radius: 50%;
        position: relative;
        color: #0bb5f4;
    }

    .resume .resume_right .resume_hobby ul li i {
        font-size: 30px;
    }

    .resume .resume_right .resume_hobby ul li:before {
        content: "";
        position: absolute;
        top: 40px;
        right: -52px;
        width: 50px;
        height: 2px;
        background: #0bb5f4;
    }

    .resume .resume_right .resume_hobby ul li:last-child:before {
        display: none;
    }

</style>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
         <img src={{asset('images/alumada.jpeg')}} width="700" alt="profile_pic"/>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"> Renee Alumada</p>
           <p class="regular">Student at Strathmore University</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               60, Nairobi <br /> Nairobi, Kenya
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               +254 704718728
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               alumada@strathmore.edu
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               www.alumada.com
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">skill's</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               HTMl
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>
           </li>
           <li>
             <div class="skill_name">
               CSS
             </div>
             <div class="skill_progress">
               <span style="width: 70%;"></span>
             </div>
             <div class="skill_per">70%</div>
           </li>
           <li>
             <div class="skill_name">
               PHP
             </div>
             <div class="skill_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="skill_per">90%</div>
           </li>
           <li>
             <div class="skill_name">
               JS
             </div>
             <div class="skill_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="skill_per">60%</div>
           </li>
           <li>
             <div class="skill_name">
               JAVA
             </div>
             <div class="skill_progress">
               <span style="width: 88%;"></span>
             </div>
             <div class="skill_per">88%</div>
           </li>
           <li>
            <div class="skill_name">
              C++
            </div>
            <div class="skill_progress">
              <span style="width: 90%;"></span>
            </div>
            <div class="skill_per">90%</div>
          </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>Renee@facebook</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p>Renee@twitter</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p>Renee@youtube</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p>Renee@linkedin</p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us</p>
         </div>
        <p>My name is Renee Alumada. I am 19 years old. I am currently a student at Strathmore University. I enjoy learning about technology, its advances and business. I believe in the Ying and yang, the Chinese symbol, which says life is a perfect balance. Due to this my favorite color is grey.
            I am a humanitarian and a have a strong passion for gender equity.  I am a member of the Kenya Model of United Nations. So far, I have been exposed to the 17 sustainable development goals of the UN.
        </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class="date">2015 - 2020</div>
                <div class="info">
                     <p class="semi-bold">St John Ambulance Team</p>
                  <p>I was a former member of the St. John Ambulance movement. St. John Ambulance is a volunteer-led, charitable non-governmental organization dedicated to the teaching and practice of first aid and the support of the national emergency response system in England. I was a cadet then moved up ranks to a corporal then a sergeant and lastly a uniformed unit management team. I enjoyed this because it was majorly helping people when they were injured.</p>
                </div>
            </li>
            <li>
              <div class="date">2015 - 2019</div>
              <div class="info">
                     <p class="semi-bold">Basket Baller</p>
                  <p>I played basketball as a co-curriculum activity in high school. I was the deputy captain in the school basketball team.</p>
                </div>
            </li>
            <li>
              <div class="date">2017 - Present</div>
              <div class="info">
                     <p class="semi-bold">Volunteer</p>
                  <p>During the holidays I volunteered at good life. Good life is a children’s home that taken in children who are HIV positive from the age of 6 months to 9yrs. It is a private institution located at Kilimani.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date">2015 - 2019</div>
                <div class="info">
                     <p class="semi-bold">Bristar Girls</p>
                  <p>My previous school was called Bristar Girls, found in Juja. Here is where I underwent my high school education. I took the 5 compulsory subjects which are Mathematics, English, Kiswahili, Chemistry and CRE according to the school together with Geography, French and Physics.</p>
                </div>
            </li>
            <li>
              <div class="date">2020 - Present</div>
              <div class="info">
                     <p class="semi-bold">Strathmore University</p>
                  <p>I am currently a student at Strathmore University. I enjoy learning about technology, its advances and business. </p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Hobby</p>
         </div>
       <ul>
         <li><i class="fas fa-book"></i></li>
         <li><i class="fas fa-film"></i></li>
         <li><i class="fas fa-grin-stars"></i></li>
         <li><i class="fas fa-basketball-ball"></i></li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
