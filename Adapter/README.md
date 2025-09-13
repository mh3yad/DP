# Adapter Pattern

**Type:** Structural  
**Definition:** Allows objects with incompatible interfaces to communicate.

---
### الفكرة
لما يكون عندك كلاس بيكلم كلاس بس أسامي الميثودز  و المتغيرات شكل الداتا مختلف 
- fullName => firstName . lastName
- getData => readData
- json => xml

---

### الحل
بتعمل **كلاس Wrapper (Adapter)** وسيط في النص:
- يستقبل الداتا
- يظبطها بالشكل اللي احنا عاوزينه
- يبعتها للكلاس اللي طالبها

---


### خطوات التنفيذ
1. هتنفذ نفس الinterface اللي الكلاس هتروحله الداتا بيستخدمه
2. هتاخد في الconstructor بتاعك object من الclass  اللي بيبعت الداتا وتعمل كل تعديلاتك علي شكل الداتا في الconstructor 
3. في الclient
   - هتعمل object من الكلاس اللي بعت الداتا
   - تبعته ك arg لل adapter 
   - وهو هيطلع الشكل اللي الremote service عايزاه