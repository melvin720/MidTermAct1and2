<?php
// variables
$userName = "piel.bourne";
$role = "Member"; 
$activeStatus = true;
$isPremiumMember = true;
$lastLoginDaysAgo = 0; 
$notificationPreference = "email"; 

// profile & dynamic Messages
// welcome message
$welcomeMessage = ($role == "Admin") ? "Welcome, Admin!" : "Welcome, $userName!";

// lastlogin message
$loginMessage = ($lastLoginDaysAgo <= 1) ? "You logged in recently." : "It's been a while since your last login.";

echo "<strong>$welcomeMessage</strong><br>";
echo "$loginMessage<br>";
echo "<br>";

// ELSE,IF,ELSEIF
if (!$activeStatus) {
    echo "❌ Your account is inactive. Please contact support.";
} else {
    if ($role == "Admin") {
        echo "✅ Access to Admin Dashboard, User Management, and System Settings.<br>";
    } elseif ($role == "Moderator") {
        echo "✅ Access to Moderation Tools.<br>";
        if ($isPremiumMember) {
            echo "⭐ Premium content library unlocked!<br>";
        }
    } elseif ($role == "Member") {
        echo "✅ Access to Forum Posts and Profile Editor.<br>";
        if ($isPremiumMember) {
            echo "⭐ Premium content library unlocked!";
        }
    } else {
        echo "👋 Welcome Guest! Limited access. Please register to unlock more features.";
    }
}
echo "<br><br>";

// notification preferences 
switch ($notificationPreference) {
    case "email":
        echo "📧 Email notifications are enabled.";
        break;
    case "sms":
        echo "📱 SMS notifications are enabled.";
        break;
    case "both":
        echo "📧 Email + 📱 SMS notifications are enabled.";
        break;
    case "none":
        echo "🔕 No notifications are enabled.";
        break;
    default:
        echo "⚠ Unknown notification preference.";
        break;
}
?>