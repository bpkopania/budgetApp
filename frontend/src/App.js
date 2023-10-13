import './App.css';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'
import Header from './components/common/Header';
import Footer from './components/common/Footer';

function App() {
  return (
    <Router>
      <div className='container w-full bg-slate-800 text-slate-100'>
        <Header />
        <Routes>
          <Route
            path='/'
            element={
              <main>
                <h3>this is main page</h3>
                {/* main page */}
              </main>
            }
          />
          {/* other pages <Route path='/about' element={<About />} /> */}
          <Route path='/dashboard'
            element={
              <>
              <h3>this is dashboard</h3>
              </>
            }
          />

          <Route path='/settings'
            element={
              <>
              <h3>this is settings</h3>
              </>
            }
          />
        </Routes>
        <Footer />
      </div>
    </Router>
  );
}

export default App;
