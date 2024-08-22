# Argo Applications
This Repository contains various Helm Charts for K3s, Treafik, Cert-Manager and other applications deplyoed by ArgoCD.

Install Order for K3s setup.

```
kubectl apply -f secrets.yaml
helm upgrade -i k3s-storage k3s-storage/. -f k3s-storage/values.yaml  --namespace kube-system --wait
helm upgrade -i cert-manager helm-charts/cert-manager/. --namespace cert-manager --wait --create-namespace # install twice for cluster issuer
helm upgrade -i argocd helm-charts/argocd/.  --namespace argocd --wait --create-namespace
```

After installation get initial ArgoCD secret for login.
```
kubectl -n argocd get secret argocd-initial-admin-secret -o jsonpath="{.data.password}" | base64 -d
```