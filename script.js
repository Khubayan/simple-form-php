let date = new Date(2022, 2, 0);
const todayDate = new Date();

const month = {
    1: "Januari",
    2: 'Februari',
    3: 'Maret',
    4: 'April',
    5: 'Mei',
    6: 'Juni',
    7: 'Juli',
    8: 'Agustus',
    9: 'September',
    10: 'Oktober',
    11: 'Nopember',
    12: 'Desember'
}



function getKeyByValueOfAnObj() {
    return Object.keys(month).find(key => month[key] === (document.getElementById('monthOptions').value))
}

function theYear() {
  for (let i = 1945; i <= todayDate.getFullYear(); i++) {
      document.getElementById(
        "yearOptions"
      ).innerHTML += `<option value="${i}" onclick="theDate()">${i}</option>`;
  }
}

function theMonth() {
  for (let i = 1; i <= 12; i++) {
      document.getElementById(
        "monthOptions"
      ).innerHTML += `<option value="${month[i]}" onclick="theDate()">${month[i]}</option>`;
  }
}

function theDate() {
   date = new Date((document.getElementById('yearOptions').value), getKeyByValueOfAnObj(), 0);

    for(let i = 0; i <= date.getDate(); i++) {
        if (i == 0) {
            document.getElementById(
              "dateOptions"
            ).innerHTML = `<option selected disabled value="0">--tanggal--</option>`;
          } else {
            document.getElementById(
              "dateOptions"
            ).innerHTML += `<option value="${i}" >${i}</option>`;
          }
    }
}

theYear();
theMonth();
theDate();


// function validateBirthday() {
//     console.log('asa');
//     console.log(date.getMonth())
//     for(let i = 0; i <=date.getDate(); i++) {
//         if(i == 0) {
//             document.getElementById('dateOption').innerHTML = `<option selected disabled value="1">--tanggal--</option>`;
//         } else {
//             document.getElementById('dateOption').innerHTML += `<option value="${i}">${i}</option>`;
//         }
//     }

//     for(let i = 0; i <= 12; i++) {
//         if(i == 0) {
//             document.getElementById('monthOptions').innerHTML = `<option selected disabled value="11" onclick="setMonthForm(), validateBirthday()">--bulan--</option>`;
//         } else {
//             document.getElementById('monthOptions').innerHTML += `<option value="${i}" onclick="setMonthForm(), validateBirthday()">${i}</option>`;
//         }
//     }

//     for(let i = 1944; i <= (date.getFullYear()); i++) {
//         if(i == 1944) {
//             document.getElementById('yearOptions').innerHTML == `<option value="${i}" onclick="setYearForm(), validateBirthday()">--tahun--</option>`;
//         } else {
//             document.getElementById('yearOptions').innerHTML += `<option value="${i}" onclick="setYearForm(), validateBirthday()">${i}</option>`;
//         }
//     }

//     console.log('sa')
// }
