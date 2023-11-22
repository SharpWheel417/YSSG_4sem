import './index.css';

const Q2 = () => {
    return (
        <table>
            <tr>
                <td rowSpan={2}>Ячейка 1</td>
                <td>Ячейка 2</td>
                <td rowSpan={2}>Ячейка 3</td>
            </tr>
            <tr>
                <td>Ячейка 4</td>
            </tr>
            <tr>
                <td>Ячейка 5</td>
                <td colSpan={2}>Ячейка 6</td>
            </tr>
        </table>
    );
}

export default Q2;