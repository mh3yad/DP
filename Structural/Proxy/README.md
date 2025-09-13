# Proxy Pattern

**Type:** Structural  
**Definition:** create a placeholder for an object to control access to it

---
### الفكرة
لما يكون عندك ميثود عاوز تنفذ لوجيك قبلها أو بعدها
---

### الحل
بتعمل كلاس تستخدمه بدل الأساسي بيعمل لوجيك قبل وبعد الميثود المستهدفة
---


### خطوات التنفيذ
1. تعمل كلاس proxy وتعمل proprty من الclass الهدف
2. هتعمل lazy init في الميثود و تعمل اللوجيك بتاعك قبل و بعد متنادي علي الbase method

### استخدامات
1. access control
2. caching
3. logging

### أنواع
1. remote بيكلم سيرفس خارجية
2. virtual بيكلم الداتا بيز
3. protection access control
