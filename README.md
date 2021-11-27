# Microsoft_Engage

<details open="open">
<summary>Table of Contents</summary>

- [About](#about)
  - [Project Overview](#project-overview)
  - [Functional Features](#functional-features)
- [Framework and Services used](#framework-and-services-used)
- [Demo](#demo)
- [Getting Started](#getting-started)
  - [Setup](#setup)
  - [Deployment](#deployment)
- [Acknowledgements](#acknowledgement)
</details>

---

<table>
<tr>
<td>

# About

## Project Overview

This is a **Online learning management system**. Here **teachers** and **students** can register and login.
**Teachers** can see how many students are there,he/she can add new courses and edit them and upload documents. **Students** can enrolled and un-enrolled in available courses and download documents.

## Functional Features

- Faculty registration and login.
- Faculities can add new courses.
- Faculities can edit available courses.
- Faculities can upload documents.
- Faculties can see the name of the student who is enrolled
  in that particular course

- Student registration and login.
- Students can enroll in courses.
- Students can also un-enroll from the enrolled courses.
- Students can download documents from the course in which they have enrolled.
- Students can enroll in multiple courses.

</td>
</tr>
</table>

# Demo

The Live website of this project can be found[here](https://elearn-system.herokuapp.com/).

## Guide

- Register/Login using a valid email-id and password.
- After login as a teacher, you have reached the dashboard.
  -Here you can see **add new courses** ,**Edit course detail**,**enrolled courses** and **course handouts**.

  - If teacher click on add courses, he can add new courses,he can upload content and set price for that particular course.
  - If the teacher clicks on edit course detail, he can edit details of available courses.
  - On clicking enrolled courses,teacher can see the name of the student who is enrolled in that particular course.
  - In the top right section, you can see avatar, on clicking that you can see **sign out** from the dashboard.

- After login as a student, you have reached the dashboard.
  -Here you can see **available course**,**enrolled course** and **download documents**
  -On clicking available course,students can see all the courses listed by teachers.
  -He can enroll in particular course by clicking enroll button.
  -On clicking enrolled courses,he can see his enrolled courses and he can also un-enroll from that courses.
  -On clicking download documents, he can see courses and download documents on clicking download documents button.
  - In the top right section, you can see avatar, on clicking that you can see **sign out** from the dashboard.

# Getting Started

## Setup

Follow these steps

- Install php in your computer.
  -Install XAMPP in your computer.
- Download whole repoistory

-Open xampp control panel and start apache and mysql.
-Open localhost/phpmyadmin.
-Make a new database and import learnp database which is present in SQL File.

-Now type localhost/phpmyadmin/Elearn.

## Deployment

The application is deployed to heroku. To deploy it:

- Create a new repository on Github.
- Create a new application on Heroku.
- Connect Heroku to Github and search for the repository
- Deploy Branch.

# Framework and Services Used

- **HTML,CSS and JavaScript.**: Used for the frontend.

- **php**: Used for the backend.

# Acknowledgement

I would like thanks to Microsoft to give me this opportunity. I would also like to thank my mentor who guided me in this journey and gave valuable feedbacks and suggestions.
