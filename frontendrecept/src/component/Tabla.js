import Table from "react-bootstrap/Table";
import MyTHead from "./MyTHead";
import MyTBody from "./MyTBody";

export default function Tabla(props) {
  return (
    <Table bordered hover>
      <MyTHead fejlecSzoveg={props.fejlec} />
      <MyTBody receptek={props.receptek} />
    </Table>
  );
}
