import { JSX } from 'react'
import Q1 from './components/q1'
import Q2 from './components/q2'
import Q3 from './components/q3'
import './App.css'



const App = (): JSX.Element => {

  return (
    <>
      <div id='rm'>
        <h1>Задание 1</h1>
        <Q1 />
        <br />
        <h1>Задание 2</h1>
        <Q2 />
        <br />
      </div>
      <h1>Задание 3</h1>
      <Q3 />
    </>
  )
}

export default App
