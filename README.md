
# Vital Events Information Management System

This project is a **web-based information management system** designed for the **FDRE Vital Events Registration Agency**. It digitizes and automates the registration and management of vital events such as **birth**, **death**, **marriage**, **divorce**, and **adoption** in Ethiopia.

## Features

- 🔐 **Role-Based Access Control** for:
  - Keble Registrars
  - Federal Registrars
  - Medical Officers
  - Regional, Zonal, and Woreda Officers
  - Statisticians
  - System Administrator

- 📝 **Vital Events Registration**
  - Birth, Death, Marriage, Divorce, and Adoption
  - Certificate generation and printing
  - Notification handling from medical institutions

- 📊 **Reports & Statistics**
  - Generate statistical and non-statistical reports
  - Calculate population size by administrative levels
  - View and count event occurrences

- 🔎 **Search & Update**
  - Search registered events
  - Update data (court order required)
  - Secure and accurate data handling

- 🛡 **Security**
  - Login authentication with session timeout
  - Role-specific access
  - Input validation to avoid incomplete or duplicate entries

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Server**: WAMP Stack

## Use Case Overview

The system supports a wide range of functions for multiple actors:
- **Admin**: Create, update, and manage accounts
- **Registrars**: Register events, update records, issue certificates
- **Medical Officers**: Submit notifications of events
- **Statisticians**: Calculate population data, generate statistics
- **Officers (Regional, Zonal, Woreda)**: View data, provide feedback

## Key Benefits

- Replaces a **manual paper-based system**
- Enables **real-time access** to a centralized database
- Reduces time, cost, and data loss risks
- Enhances **data-driven decision-making** for government agencies
- Provides legal evidence for citizenship, court cases, and public services

## Screenshots

![Home Page](screenshots/home.png)  
![Registrar Page](screenshots/registrar.png)  
![Event Form](screenshots/event_form.png)

## Getting Started

1. Clone the repository
2. Set up WAMP and import the MySQL database
3. Place the PHP files in the `htdocs` directory
4. Access via `localhost/your_project`

