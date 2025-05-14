
const loadTasks = () => {

    let tasks = JSON.parse(localStorage.getItem("tasks")) || [];
    tasks.forEarch((taskObj) => {

        addTask(taskObj.task);
        
        if(taskObj.completed){

            const taskItem = document.querySelector("li");
            taskItem[taskItem.length - 1].style.textDecoration = "line-through";
        }
    });
};

document.getElementById("addTaskBtn").addEventListener("click", () => {

    const taskInput = document.getElementById("taskInput");
    const task = taskInput.value;

    if(task){
        addTask(task);
        saveTask(task);
        taskInput.value = "";
    }
});


const addTask = (task) => {

    const tasklist = document.getElementById("taskList");
    const li = document.createElement("li");
    li.textContent = task

    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "Delete";
    deleteBtn.addEventListener("click", () => {

        tasklist.removeChild(li);
        deleteTask(task);

    });

    li.appendChild(deleteBtn);
    tasklist.appendChild(li);

    li.addEventListener("click", () => {

        li.style.textDecoration = li.style.textDecoration === "line-through" ? "none" : "line-through";
        updateTaskStatus(task);
    });
};

const saveTask = (task) => {

    let tasks = JSON.parse(localStorage.getItem(tasks)) || [];
    tasks.push({task, completed: false});
    localStorage.setItem("tasks", JSON.stringify(tasks));
}

const deleteTask = (task) => {

    let tasks = JSON.parse(localStorage.getItem("tasks")) || [];
    tasks = tasks.filter((taskObj) => taskObj.task !== task);
    localStorage.setItem("tasks", JSON.stringify(tasks));
};

const updateTaskStatus = (task) => {

    let tasks = JSON.parse(localStorage.getItem(tasks)) || [];

    tasks = tasks.map((taskObj) => {

        if(taskObj.task === task){
            taskObj.completed = !taskObj.completed;
        }

        return taskObj;
    });

    localStorage.setItem("tasks", JSON.stringify(tasks));
    
};

document.addEventListener("DOMContentLoaded", loadTasks);