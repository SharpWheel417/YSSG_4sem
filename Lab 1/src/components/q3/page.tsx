
const Page = () => {
    setTimeout(() => {
        window.scrollTo(0, 1000);
    }, 100);
    return (
        <div className='card'>
            <img src='https://goodimages.ru/files/img/pics/raian-gosling/raian-gosling-25.webp' alt='foto' />
            <table>
                <tr>
                    <td>Имя: </td>
                    <td><b>Райан Гослинг</b></td>
                </tr>
                <tr>
                    <td><i>Ссылка на кинопоиск:</i></td>
                    <td><a href='https://www.kinopoisk.ru/name/10143/?utm_referrer=www.google.com'>ссылка</a></td>
                </tr>
            </table>
        </div>
    );
}

export default Page;