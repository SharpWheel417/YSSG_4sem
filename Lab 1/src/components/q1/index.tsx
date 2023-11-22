// Список студентов (с вложениями: возраст, группа, пол)
const Q1 = () => {

    const studentList = [
        { возраст: 20, группа: 'Группа 1', пол: 'Мужской', ФИО: 'Иванов Иван Иванович' },
        { возраст: 19, группа: 'Группа 2', пол: 'Женский', ФИО: 'Петрова Анна Сергеевна' },
        { возраст: 21, группа: 'Группа 3', пол: 'Мужской', ФИО: 'Сидоров Александр Иванович' },
        { возраст: 20, группа: 'Группа 1', пол: 'Женский', ФИО: 'Кузнецова Екатерина Александровна' },
        { возраст: 22, группа: 'Группа 2', пол: 'Мужской', ФИО: 'Смирнов Илья Васильевич' },
    ];

    let id = 0;
    return (
        <div>
            <ul style={{ textAlign: "left" }}>
                {studentList.map((student) => (
                    <li key={id++}>{`${student.ФИО} - ${student.группа} ${student.возраст} лет, пол: ${student.пол}`}</li>
                ))}
            </ul>
            <ol style={{ textAlign: "left" }}>
                {studentList.map((student) => (
                    <li key={id++}>{`${student.ФИО} - ${student.группа} ${student.возраст} лет, пол: ${student.пол}`}</li>
                ))}
            </ol>
        </div>
    );
}

export default Q1;