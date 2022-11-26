function fift(){
    const result = [];
    for (let i = 1; i <= 15; i++){
        result.push(i);
    }
    return result;
}
const fifteen = fift();
var w = winName.value;
var c = Number(counter.innerHTML);
function getC(){
    return c;
}

//функция перемешивания номеров
function shuffle(arr){
    const newArr = [];
    arr.push(0);
    for(i = 0; i < 2000; i++){
        let rand = Math.ceil(Math.random()* 4);
        var idx = arr.indexOf(0);
        //сюда сохраняется число перед заменой на ноль
        var bufferR = arr[idx + 1];
        var bufferL = arr[idx - 1];
        var bufferD = arr[idx + 4];
        var bufferU = arr[idx - 4];

        //если ноль в углу, мешаем в другую сторону
        switch(rand){
            case 1:
                switch(arr.indexOf(0)){
                    case 0:
                    case 4:
                    case 8:
                    case 12:
                        arr[idx] = bufferR;
                        arr[idx + 1] = 0;
                        break;
                    default:
                        arr[idx - 1] = 0;
                        arr[idx] = bufferL;
                        break;
                }
                break;
            case 2:
                switch(idx){
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                        arr[idx] = bufferD;
                        arr[idx + 4] = 0;
                        break;
                    default:
                        arr[idx] = bufferU;
                        arr[idx - 4] = 0;
                        break;
                }
                break;
            case 3:
                switch(idx){
                    case 3:
                    case 7:
                    case 11:
                    case 15:
                        arr[idx - 1] = 0;
                        arr[idx] = bufferL;
                        arr[idx - 1] = 0;
                        break;
                    default:
                        arr[idx] = bufferR;
                        arr[idx + 1] = 0;
                        break;
                }
                break;
            case 4:
                switch(idx){
                    case 12:
                    case 13:
                    case 14:
                    case 15:
                        arr[idx] = bufferU;
                        arr[idx - 4] = 0;
                        break;
                    default:
                        arr[idx] = bufferD;
                        arr[idx + 4] = 0;
                        break;
                }
                break;
        }
    }
    //удаляем ноль из массива и заменяем его пустой строкой
    arr[arr.indexOf(0)] = '';
    return arr;
}
//наполняем таблицу полученными значениями
let shuf = shuffle(fifteen);
for(i = 0; i < shuf.length; i++){
    document.getElementById(i).innerHTML = shuf[i];
}
function changeItem(event){
    let neighbour = [], empty;

    //ищем соседа пустой клетки
    function findN(){
        for(i = 0; i < shuf.length; i++){
            document.getElementById(i).innerHTML = shuf[i];
            if(shuf[i] === ''){
                empty = document.getElementById(i);
                if(document.getElementById((i - 1)) && i !== 4 && i !== 8 && i !== 12){
                    neighbour.push(document.getElementById((i - 1)));
                }
                if (document.getElementById((i + 1)) && i !== 3 && i !== 7 && i !== 11){
                    neighbour.push(document.getElementById((i + 1)));
                }
                if (document.getElementById((i - 4))){
                    neighbour.push(document.getElementById((i - 4)));
                }
                if (document.getElementById((i + 4)))
                    neighbour.push(document.getElementById((i + 4)));
            }
        }
    }
    findN();
    let empId = Number(empty.id);
    let target = event.target;

    //добавляем функцию управления стрелками клавиатуры

    if(event.code === "ArrowUp" && empId < 12){
        target = document.getElementById(empId + 4);
    } else if(event.code === "ArrowDown" && empId > 3){
        target = document.getElementById(empId - 4);                
    } else if(event.code === "ArrowLeft" && empId !== 3 && empId !== 7 && empId !== 11 && empId !== 15){
        target = document.getElementById(empId + 1);
    } else if(event.code === "ArrowRight" && empId !== 0 && empId !== 4 && empId !== 8 && empId !== 12){
        target = document.getElementById(empId - 1);
    }

    //если кликнули мышкой по соседу, выполняем замену
    if(neighbour.includes(target)){
        let buffer = target.innerHTML;
        let idx = shuf.indexOf(Number(target.innerHTML));
        target.innerHTML = '';
        empty.innerHTML = buffer;

        let numb = [];
        for(let i = 0; i < shuf.length; i++){
            numb.push(Number(document.getElementById(i.toString()).innerHTML));
        }
        numb[numb.indexOf(0)] = '';
        shuf = numb;

        //добавим счетчик ходов
        var counter = document.getElementById('counter');
        c++;
        counter.innerHTML = c.toString();
    }
    let newFift = fift();
    newFift.push('');
    if(shuf.toString() === newFift.toString()){
        const modal = document.getElementById("myModal");
        const winSub = document.querySelector("#winSub");
        const winName = document.querySelector("#winName");
        const newElement = document.createElement('div');
        const modalBody = winName.parentElement;
        modal.style.display = "block";
        newElement.innerHTML = `<h1>Вы выиграли!</h1><p>Общее количество ходов: ${c}</>`;
        newElement.id = "win";
        var ch = document.getElementById("win");

        if(!ch){
            document.body.appendChild(newElement);
            modalBody.insertBefore(newElement, winName);
            winSub.value = c;
        }
        document.onclick = null;
    }
}

document.onclick = changeItem;
document.onkeyup = changeItem;