import { BrowserRouter as Router, Route, Routes, Link } from 'react-router-dom'
import Page from './page';
import './index.css';

// Страница «Мой любимый актер»
// Создать HTML-страницу, которая должна содержать: 
// списки, таблицы, рисунки, ссылки,
// различное оформление текста (начертание, размер шрифта, выравнивание и т.д.).
const Q3 = () => {
    window.scrollTo(0, +1000);
    return (
        <Router>
            <Link hrefLang='ru' to='/gosling'>Райан Гослинг</Link>
            <Routes>
                <Route path="/gosling" element={<Page />} />
            </Routes>
        </Router >
    );
}

export default Q3;