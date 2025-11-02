import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import React, { useEffect, useState } from "react";
import axios from "axios";

function App() {
  const [konyvek, setKonyvek] = useState([]);
  useEffect(() => {
    axios.get("/api/konyvek").then(resp => setKonyvek(resp.data));
  }, []);
  return (
    <div className="container">
      <h2>Könyvek listája</h2>
      <div className="row">
        {konyvek.map(konyv => (
          <div key={konyv.konyvid} className="col-md-4 col-sm-6 mb-3">
            <div className="card">
              <div className="card-body">
                <h5>{konyv.cim}</h5>
                <p>Szerző: {konyv.szerzo.nev}</p>
                <p>Kategória: {konyv.kategoria.nev}</p>
                <p>Elérhető: {konyv.elerheto ? "Igen" : "Nem"}</p>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default App
