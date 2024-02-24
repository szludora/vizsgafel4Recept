import Table from "react-bootstrap/Table";
import MyTHead from "./MyTHead";
import MyTBody from "./MyTBody";

export default function Tabla(props) {
  function mutat(id) {
    props.mutat(id);
  }
  return (
    <Table bordered hover className="w-75 m-auto mt-4 mb-4">
      <MyTHead fejlec={props.fejlec} />
      <MyTBody receptek={props.receptek} mutat={mutat} />
    </Table>
  );
}
