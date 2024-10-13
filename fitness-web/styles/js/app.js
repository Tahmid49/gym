const form = document.querySelector("form");
const results = document.querySelector("#results");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    const height = parseFloat(document.querySelector("#height").value);
    const weight = parseFloat(document.querySelector("#weight").value);
    
    if (!height || height <= 0 || isNaN(height)) {
        results.textContent = "Please provide a valid height.";
    } else if (!weight || weight <= 0 || isNaN(weight)) {
        results.textContent = "Please provide a valid weight.";
    } else {
        const bmi = (weight / ((height / 100) ** 2)).toFixed(2);
        let classification = "";

        if (bmi < 18.5) {
            classification = " (Underweight)";
        } else if (bmi < 24.9) {
            classification = " (Normal weight)";
        } else if (bmi < 29.9) {
            classification = " (Overweight)";
        } else {
            classification = " (Obesity)";
        }

        results.innerHTML = `<span>Your BMI is: ${bmi}${classification}</span>`;
    }
});
