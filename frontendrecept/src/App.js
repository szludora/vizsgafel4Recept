import "./App.css";
import ReactDOMServer from "react-dom/server";
import Container from "react-bootstrap/Container";
import Col from "react-bootstrap/Col";
import Kartya from "./component/Kartya";
import Tabla from "./component/Tabla";
import DataService from "./model/DataService";
import { useEffect, useState } from "react";

function App() {
  const DS = new DataService();
  const vegpont = "/receptek";
  const [receptek, setReceptek] = useState([{}]);
  const fejlec = ["Név", "Kategória"];

  useEffect(() => {
    DS.getData(vegpont, setReceptek);
  }, []);

  function mutat(id) {
    document.querySelector(".kartyaHelye").innerHTML =
      //mivel a receptek az egy lista, így nem az id-jával, hanem az indexével küldjük el, ezért kell csökkenteni eggyel
      ReactDOMServer.renderToString(<Kartya obj={receptek[id - 1]} />);
  }

  return (
    <div className="App">
      <header className="App-header">
        <p>Szlucska Dóra - Receptkönyv - Vizsgafeladat</p>
      </header>
      <Tabla fejlec={fejlec} receptek={receptek} mutat={mutat}/>
      <Container>
        <Col className="kartyaHelye"></Col>
      </Container>
    </div>
  );
}

export default App;
