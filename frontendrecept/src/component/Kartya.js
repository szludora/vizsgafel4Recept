import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';

export default function Kartya(props) {
  return (
    <Card className="w-50 m-auto mt-4 mb-4">
      <Card.Img variant="top" src={props.obj.kep_eleresi_ut} />
      <Card.Body>
        <Card.Title>{props.obj.nev}</Card.Title>
        <Card.Text>
          {props.obj.leiras}
        </Card.Text>
      </Card.Body>
    </Card>
  );
}
