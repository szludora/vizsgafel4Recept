import "./App.css";
import Tabla from "./component/Tabla";
import DataService from "./model/DataService";
import { useEffect, useState } from "react";

function App() {
  const DS = new DataService();
  const vegpont = "/receptek";
  const [receptek, setReceptek] = useState([{}]);
  const [fejlec, setFejlec] = useState([{}]);

  useEffect(() => {
    DS.getData(vegpont, setReceptek);
    DS.getData("/leiro", setFejlec);
  }, []);

  return (
    <div className="App">
      <header className="App-header">
        <p>Szlucska Dóra - Receptkönyv - Vizsgafeladat</p>
      </header>
      <Tabla fejlec={fejlec} receptek={receptek} />
    </div>
  );
}

export default App;
