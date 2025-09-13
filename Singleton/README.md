# Singleton Pattern – Currency Converter Example

This app demonstrates how to implement the **Singleton Pattern** in a simple **Exchange Currency Calculation Bank App**.

---

## 🛠 Steps to Apply Singleton
1. هتخلي ال constructor يكون private
2. هتعمل static object variable من نفس الكلاس $_instance
3. هتعمل ميثود static بتشوف لو ال$_instance ب null تعمل new object غير كدا رجع ال$_instance
4. تستخدمه لما تكون محتاج نسخة واحدة من الclass زي الDB config file و هتحتاج restart للsystem لو اتعدلت