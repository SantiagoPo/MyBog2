let monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

let currentDate = new Date();
let currentDay = currentDate.getDate();
let monthNumber = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

let dates = document.getElementById('dates');
let month = document.getElementById('month');
let year = document.getElementById('year');

let prevMonthDOM = document.getElementById('prev-month');
let nextMonthDOM = document.getElementById('next-month');

month.textContent = monthNames[monthNumber];
year.textContent = currentYear.toString();

prevMonthDOM.addEventListener('click', () => lastMonth());
nextMonthDOM.addEventListener('click', () => nextMonth());

// Variable para almacenar el día seleccionado
let selectedDay = null;

// Función para seleccionar un día
const selectDay = (dayElement) => {
  // Elimina la clase de selección del día anteriormente seleccionado
  if (selectedDay) {
    selectedDay.classList.remove('calendar__date--selected');
  }

  // Establece el nuevo día seleccionado
  selectedDay = dayElement;
  selectedDay.classList.add('calendar__date--selected');
};

// Evento clic en un día
dates.addEventListener('click', (event) => {
  // Comprueba si el elemento clicado es un día del calendario
  if (event.target.classList.contains('calendar__date')) {
    selectDay(event.target);
  }
});

const writeMonth = (month) => {
  dates.innerHTML = ''; // Limpiar contenido del calendario

  // Agregar días de meses anteriores
  for (let i = startDay(); i > 0; i--) {
    dates.innerHTML += `<div class="calendar__date calendar__item calendar__last-days">${getTotalDays(
      monthNumber - 1
    ) - (i - 1)}</div>`;
  }

  // Agregar días del mes actual
  for (let i = 1; i <= getTotalDays(month); i++) {
    if (i === currentDay) {
      dates.innerHTML += `<div class="calendar__date calendar__item calendar__today">${i}</div>`;
    } else {
      dates.innerHTML += `<div class="calendar__date calendar__item">${i}</div>`;
    }
  }

  // Calcular cuántos espacios vacíos agregar para completar la última fila
  const totalDaysDisplayed = startDay() + getTotalDays(month);
  const remainingEmptySpaces = 7 - (totalDaysDisplayed % 7);

  // Agregar espacios vacíos para completar la última fila
  for (let i = 0; i < remainingEmptySpaces; i++) {
    dates.innerHTML += `<div class="calendar__date calendar__item calendar__empty"></div>`;
  }
};

const getTotalDays = (month) => {
  if (month === -1) month = 11;

  if (
    month == 0 ||
    month == 2 ||
    month == 4 ||
    month == 6 ||
    month == 7 ||
    month == 9 ||
    month == 11
  ) {
    return 31;
  } else if (month == 3 || month == 5 || month == 8 || month == 10) {
    return 30;
  } else {
    return isLeap() ? 29 : 28;
  }
};

const isLeap = () => {
  return (
    (currentYear % 100 !== 0 && currentYear % 4 === 0) ||
    currentYear % 400 === 0
  );
};

const startDay = () => {
  let start = new Date(currentYear, monthNumber, 1);
  return start.getDay() === 0 ? 6 : start.getDay() - 1;
};

const lastMonth = () => {
  if (monthNumber !== 0) {
    monthNumber--;
  } else {
    monthNumber = 11;
    currentYear--;
  }

  setNewDate();
};

const nextMonth = () => {
  if (monthNumber !== 11) {
    monthNumber++;
  } else {
    monthNumber = 0;
    currentYear++;
  }

  setNewDate();
};

const setNewDate = () => {
  currentDate.setFullYear(currentYear, monthNumber, currentDay);
  month.textContent = monthNames[monthNumber];
  year.textContent = currentYear.toString();
  writeMonth(monthNumber);
};

writeMonth(monthNumber);

for (let i = 0; i < 7; i++) {
    const dayElement = document.createElement('div');
    dayElement.classList.add('calendar__weekday');
    dayElement.textContent = dayNames[i];
    
    // Añadir el atributo "data-day-mobile" con el texto deseado para dispositivos móviles
    dayElement.setAttribute('data-day-mobile', dayNamesMobile[i]);
    
    week.appendChild(dayElement);
  }
  