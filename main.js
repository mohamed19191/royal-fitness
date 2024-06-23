function toggleMenu() {
    var navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show');
    var iconBar = document.querySelector('.icon-bar');
    iconBar.classList.toggle('change');
}
document.getElementById('calculate').addEventListener('click', () => {
    const gender = document.getElementById('gender').value;
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseFloat(document.getElementById('age').value);
    const activity = parseFloat(document.getElementById('activity').value);

    let bmr;
    if (gender === 'male') {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
    } else {
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
    }

    const tdee = bmr * activity;
    const bmi = (weight / Math.pow(height / 100, 2)).toFixed(2);
    const idealWeight = gender === 'male' ? (height - 100) - ((height - 100) / 10) : (height - 100) - ((height - 100) / 15);
    const suggestedCalories = tdee * 0.8; // يمكنك تعديل النسبة حسب الحاجة

    const resultElement = document.getElementById('result');
    resultElement.innerHTML = `
        <p><strong>Metabolic rate:</strong> ${bmr.toFixed(2)}</p>
        <p><strong>Calories for the body:</strong> ${tdee.toFixed(2)}</p>
        <p><strong>Body mass:</strong> ${bmi}</p>
        <p><strong>Ideal Weight:</strong> ${idealWeight.toFixed(2)} kg</p>
        <p><strong>Suggested Calories for Ideal Body:</strong> ${suggestedCalories.toFixed(2)}</p>
        <!-- يمكنك إضافة نتائج إضافية حسب الحاجة -->
    `;
});
