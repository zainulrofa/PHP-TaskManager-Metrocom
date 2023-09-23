<h1 align="center">Task Manager</h1>
<p align="left">
  Built with:
</p>

[![PHP](https://img.shields.io/badge/PHP8.2.4-484C89?style=for-the-badge&logo=php&logoColor=white)]()
[![apache](https://img.shields.io/badge/APACHE2.4.56-F69824?style=for-the-badge&logo=xampp&logoColor=white)]()
[![bootstrap](https://img.shields.io/badge/Bootstrap5-6f42c1?style=for-the-badge&logo=bootstrap&logoColor=white)]()
[![mysql](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)]()

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [How to Run the App](#how-to-run-the-application)
- [Contributor](#contributor)

## Introduction
<b>Task Manager</b> is a web application that makes it easy to manage your to-do lists. With features like viewing, creating, editing, deleting, and searching tasks, we help you stay organized and efficient.

## Features

- View Task List
- Create a New Task
- Edit and Delete Tasks
- Search Tasks by Title or Status

## How to Run the Application

### 1. Clone this repository

Clone this repository by run the following code:

```
$ git clone <this-repo-url>
```

### 2. Intallation Web Server

Download Xampp from this link https://www.apachefriends.org/download.html

### 3. Set Up Web Server

Open the control panel and start the apache and MySQL module.

### 4. Open the App

Create folder metrocom\taskmanager in folder htdocs:
```
D:\xampp\htdocs\
```
Create a config folder inside the app folder to store the config file.php:
```
<?php
// ROUTING
define('BASURL', 'http://localhost/metrocom/taskmanager/public');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'task_manager');
```
You can access the app on web browser by url:
```
http://localhost/metrocom/taskmanager/public
```
Also you can access the database on web browser by url:
```
http://localhost/phpmyadmin
```

## Contributor
<b>Zainul Muhammad Rofa</b>
