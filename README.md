# 📧 Messaging App (Symfony Version)

A messaging app similar to email, built with Symfony, Bootstrap, and MySQL. This application allows users to send and receive messages with attachments, manage their profiles, and more. Administrators can block/unblock users and manage content from the admin panel.

## 🚀 Features

- **🔑 User Authentication:**
  - 🔐 Login and Registration functionality
  - 🆘 Forgot password feature

- **📥 Inbox/Outbox:**
  - 📬 View received messages in your Inbox
  - 📤 View sent messages in your Outbox

- **💬 Messaging:**
  - ✉️ Send and receive text messages
  - 📎 Attach files to messages

- **👤 Profile Management:**
  - 📸 Edit profile picture
  - 📝 Update personal information (name, email, etc.)

- **🔄 Message Status:**
  - 👁️ Track message status (Read/Unread)

- **👨‍💻 Admin Panel:**
  - ⚖️ Admins can manage users: Block and Unblock users as needed

## 🛠️ Tech Stack

- **Backend:** Symfony
- **Frontend:** Bootstrap
- **Database:** MySQL

## 🏁 Installation

1️⃣ Clone the repository:
   ```bash
   git clone https://github.com/yourusername/messaging-app.git
```

2️⃣ Navigate to the project directory:
```bash
cd messaging-app
```

3️⃣ Install the required dependencies using Composer:
```bash
composer install
```

4️⃣ Configure the database. Create a .env file and set your database connection. Example:
```bash
DATABASE_URL="mysql://root:password@localhost:3306/messaging_app"
```

5️⃣ Run the database migrations:
```bash
php bin/console doctrine:migrations:migrate
```

6️⃣ Access the application in your browser at http://localhost.

📄 PDF Documentation
For detailed documentation, including setup instructions, user guide, and more, please refer to the PDF available in the repository:
[📥 Click to view Documentation](https://github.com/Amine6363/WebMessagingApp_Symfony/blob/9c6d8c3f776d8e76ab2f52209eb0ab2cbb474965/Second%20Term%20Project%20-%20Messaging%20Application%20Symfon%20ea9ab35c0d5145b28b075e52e7f856f8.pdf)

