# Factory Method

**Type:** Creational  
**Definition:** provides a way to create objects and let factory decide which type of object.

---
### الفكرة
لما يكون عندك أكتر من كلاس بينهم interface مشتركة وانت محناج تعمل object منهم بناء علي شرط بسيط زي كود
---
### الحل
- تخلي كل ال objects يimplenents نفس ال interface
- تعمل factory فيه ميثود create يتاخد param وبتعمل switch case وتعمل objects حسب الparam وترجع new objects

---


###  مميزات
1. open/closed principle
2. Single responsibility

### عيوب
1. code more complicated